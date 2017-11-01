<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Other extends CI_Controller {
	public function index()
	{
			$this->load->library('pagination');
			$config = array();
			$config["base_url"] = base_url()."index.php/Other/index";
			$config["per_page"] = 8;
			$config["num_links"] =5;
			$config["uri_segment"] =3;
			$config["total_rows"] = $this->db->get('other')->num_rows();
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
			$this->db->from('other');
			$this->db->join('other_img','other.otherid = other_img.otherid','INNER');
			$this->db->group_by('other.otherid');
			$this->db->offset($offset);
			$this->db->limit($limit,$offset);
			//passing data
			$data['Other'] =$this->db->get();
			$this->load->view('pages/other/Director',$data);
	}
	public function view($otherid){
			$this->db->select('*');
			$this->db->from('other');
			$this->db->join('other_img','other.otherid=other_img.otherid','INNER');
			$this->db->where('other.otherid',$otherid);
		$data['OtherView'] = $this->db->get()->result_array();
			$this->db->select('*');
			$this->db->from('other');
			$this->db->join('other_img','other.otherid=other_img.otherid');
			$this->db->group_by('other.otherid');
			$this->db->order_by('rand()');
			$this->db->limit(4);
		$data['SimilarResults'] = $this->db->get()->result_array();
		//Counter to update visits of each record.
		$view_count_query = "update other set visits = visits+1 where otherid = $otherid";
		$this->db->query($view_count_query);
		$this->load->view('pages/other/view/ViewDirector',$data);	
	}
	public function search(){
		$OtherSrch = array();
		 $q = $this->input->post('q');
		 $q = preg_replace('/[^\p{L}\p{N}\s]/u',' ', $q);
		 $wordCount = str_word_count($q);
		 $Search = explode(' ', $q);
		 $this->db->select("other.title,other.otherid");
		 $this->db->from('other');
		 $this->db->like('title',$Search[0],'both');
		 $this->db->or_like('description',$Search[0],'both');
		 $this->db->or_like('city',$Search[0],'both');
		 for ($i=1; $i <$wordCount ; $i++) { 
		 	$this->db->or_like('title',$Search[$i],'both');
		 	$this->db->or_like('description',$Search[$i],'both');
		 	$this->db->or_like('city',$Search[0],'both');
		 }
		 $other = $this->db->get();
		 foreach ($other->result_array() as $value) {
		 	array_push($OtherSrch, $value['otherid']);
		 }
		 $searchData['other'] = $OtherSrch; 
		 $otherData = implode(',', $searchData['other']);
		 if($otherData!=null){
	$otherQuery = "select * from other INNER JOIN other_img on other.otherid =  other_img.otherid where other.otherid in(".$otherData.") GROUP BY other.otherid";
		$data['otherResult'] = $this->db->query($otherQuery)->result_array();
	}
	$data["query"] = $q;
		$this->load->view('pages/other/search/Director',$data);

	}
}
