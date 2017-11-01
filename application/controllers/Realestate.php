<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Realestate extends CI_Controller {
	public function index()
	{
			$this->load->library('pagination');
			$config = array();
			$config["base_url"] = base_url()."index.php/Realestate/index";
			$config["per_page"] = 8;
			$config["num_links"] =5;
			$config["uri_segment"] =3;
			$config["total_rows"] = $this->db->get('realestate')->num_rows();
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
			$this->db->from('realestate');
			$this->db->join('real_img','realestate.realid = real_img.realid','INNER');
			$this->db->group_by('realestate.realid');
			$this->db->offset($offset);
			$this->db->limit($limit,$offset);
			//passing data
			$data['Realestate'] =$this->db->get();
			$this->load->view('pages/realestate/Director',$data);
	}
	public function view($realid){
			$this->db->select('*');
			$this->db->from('realestate');
			$this->db->join('real_img','realestate.realid=real_img.realid','INNER');
			$this->db->where('realestate.realid',$realid);
		$data['RealestateView'] = $this->db->get()->result_array();
			$this->db->select('*');
			$this->db->from('realestate');
			$this->db->join('real_img','realestate.realid=real_img.realid');
			$this->db->group_by('realestate.realid');
			$this->db->order_by('rand()');
			$this->db->limit(4);
		$data['SimilarResults'] = $this->db->get()->result_array();
		//Counter to update visits of each record.
		$view_count_query = "update realestate set visits = visits+1 where realid = $realid";
		$this->db->query($view_count_query);
		$this->load->view('pages/realestate/view/ViewDirector',$data);	
	}
	public function search(){	
		$realestateSrch = array();
		 $q = $this->input->post('q');
		 $q = preg_replace('/[^\p{L}\p{N}\s]/u',' ', $q);
		 $wordCount = str_word_count($q);
		 $Search = explode(' ', $q);
		 $this->db->select("realestate.title,realestate.realid");
		 $this->db->from('realestate');
		 $this->db->like('title',$Search[0],'both');
		 $this->db->or_like('description',$Search[0],'both');
		 $this->db->or_like('city',$Search[0],'both');
		 for ($i=1; $i <$wordCount ; $i++) { 
		 	$this->db->or_like('title',$Search[$i],'both');
		 	$this->db->or_like('description',$Search[$i],'both');
		 	$this->db->or_like('city',$Search[0],'both');
		 }
		 $realestate = $this->db->get();
		 foreach ($realestate->result_array() as $value) {
		 	array_push($realestateSrch, $value['realid']);
		 }
		 $searchData['realestate'] = $realestateSrch;
		 $realestateData = implode(',', $searchData['realestate']);
	 if($realestateData!=null){
	$realestateQuery = "select * from realestate INNER JOIN real_img on realestate.realid =  real_img.realid where realestate.realid in(".$realestateData.") GROUP BY realestate.realid";
		$data['realestateResult'] = $this->db->query($realestateQuery)->result_array();
	}
		$data["query"] = $q;
		$this->load->view('pages/realestate/search/Director',$data);
	}
}
