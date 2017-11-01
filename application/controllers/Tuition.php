<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tuition extends CI_Controller {
	public function index()
	{
			$this->load->library('pagination');
			$config = array();
			$config["base_url"] = base_url()."index.php/Tuition/index";
			$config["per_page"] = 8;
			$config["num_links"] =5;
			$config["uri_segment"] =3;
			$config["total_rows"] = $this->db->get('tution')->num_rows();
			$config["full_tag_open"] = '<ul class="pagination">';
			$config["full_tag_close"] = '</ul>';	
			$config["first_link"] = "&laquo;";
			$config["first_tag_open"] = "<li>";
			$config["first_tag_close"] = "</li>";
			$config["last_link"] = "&raquo;";
			$config["last_tag_open"] = "<li>";
			$config["last_tag_close"] = "</li>";
			$config['next_link'] = '&gt;';
			$config['next_tag_open'] = '<li>';
			$config['next_tag_close'] = '<li>';
			$config['prev_link'] = '&lt;';
			$config['prev_tag_open'] = '<li>';
			$config['prev_tag_close'] = '<li>';
			$config['cur_tag_open'] = '<li class="active"><a href="#">';
			$config['cur_tag_close'] = '</a></li>';
			$config['num_tag_open'] = '<li>';
			$config['num_tag_close'] = '</li>';
			$this->pagination->initialize($config);
			$offset = $this->uri->segment(3);
			$limit = $config['per_page'];
			//Selecting data
		 	$this->db->select('*');
			$this->db->from('tution');
			$this->db->join('tut_img','tution.tutid = tut_img.tutid','INNER');
			$this->db->group_by('tution.tutid');
			$this->db->offset($offset);
			$this->db->limit($limit,$offset);
			//passing data
			$data['Tuition'] =$this->db->get();
			$this->load->view('pages/tuition/Director',$data);
	}
	public function view($tutid){
			$this->db->select('*');
			$this->db->from('tution');
			$this->db->join('tut_img','tution.tutid=tut_img.tutid','INNER');
			$this->db->where('tution.tutid',$tutid);
		$data['TuitionView'] = $this->db->get()->result_array();
			$this->db->select('*');
			$this->db->from('tution');
			$this->db->join('tut_img','tution.tutid=tut_img.tutid');
			$this->db->group_by('tution.tutid');
			$this->db->order_by('rand()');
			$this->db->limit(4);
		$data['SimilarResults'] = $this->db->get()->result_array();
		//Counter to update visits of each record.
		$view_count_query = "update tution set visits = visits+1 where tutid = $tutid";
		$this->db->query($view_count_query);
		$this->load->view('pages/tuition/view/ViewDirector',$data);	
	}
	public function search(){
		$TuitionSrch = array();
		 $q = $this->input->post('q');
		 $q = preg_replace('/[^\p{L}\p{N}\s]/u',' ', $q);
		 $wordCount = str_word_count($q);
		 $Search = explode(' ', $q);
		 $this->db->select("tution.title,tution.tutid");
		 $this->db->from('tution');
		 $this->db->like('title',$Search[0],'both');
		 $this->db->or_like('description',$Search[0],'both');
		 $this->db->or_like('city',$Search[0],'both');
		 for ($i=1; $i <$wordCount ; $i++) { 
		 	$this->db->or_like('title',$Search[$i],'both');
		 	$this->db->or_like('description',$Search[$i],'both');
		 	$this->db->or_like('city',$Search[0],'both');
		 }
		 $tution = $this->db->get();
		 foreach ($tution->result_array() as $value) {
		 	array_push($TuitionSrch, $value['tutid']);
		 }
		 $searchData['tution'] = $TuitionSrch; 
		 $tuitionData = implode(',', $searchData['tution']);
	if($tuitionData!=null){
	$tutionQuery = "select * from tution INNER JOIN tut_img on tution.tutid =  tut_img.tutid where tution.tutid in(".$tuitionData.") GROUP BY tution.tutid";
		$data['tuitionResult'] = $this->db->query($tutionQuery)->result_array();
	}
		$data["query"] = $q;
		$this->load->view('pages/tuition/search/Director',$data);
	}	
}
