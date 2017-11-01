<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Travelling extends CI_Controller {
	public function index()
	{
			$this->load->library('pagination');
			$config = array();
			$config["base_url"] = base_url()."index.php/Travelling/index";
			$config["per_page"] = 8;
			$config["num_links"] =5;
			$config["uri_segment"] =3;
			$config["total_rows"] = $this->db->get('travelling')->num_rows();
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
			$this->db->from('travelling');
			$this->db->join('travelling_img','travelling.travelid = travelling_img.travelid','INNER');
			$this->db->group_by('travelling.travelid');
			$this->db->offset($offset);
			$this->db->limit($limit,$offset);
			//passing data
			$data['Travelling'] =$this->db->get();
			$this->load->view('pages/travelling/Director',$data);
	}
	public function view($travelid){
			$this->db->select('*');
			$this->db->from('travelling');
			$this->db->join('travelling_img','travelling.travelid=travelling_img.travelid','INNER');
			$this->db->where('travelling.travelid',$travelid);
		$data['TravellingView'] = $this->db->get()->result_array();
			$this->db->select('*');
			$this->db->from('travelling');
			$this->db->join('travelling_img','travelling.travelid=travelling_img.travelid');
			$this->db->group_by('travelling.travelid');
			$this->db->order_by('rand()');
			$this->db->limit(4);
		$data['SimilarResults'] = $this->db->get()->result_array();
		//Counter to update visits of each record.
		$view_count_query = "update travelling set visits = visits+1 where travelid = $travelid";
		$this->db->query($view_count_query);
		$this->load->view('pages/travelling/view/ViewDirector',$data);	
	}
	public function search(){
		 $TravellingSrch = array();
		 $q = $this->input->post('q');
		 $q = preg_replace('/[^\p{L}\p{N}\s]/u',' ', $q);
		 $wordCount = str_word_count($q);
		 $Search = explode(' ', $q);
		 $this->db->select("travelling.title,travelling.travelid");
		 $this->db->from('travelling');
		 $this->db->like('title',$Search[0],'both');
		 $this->db->or_like('description',$Search[0],'both');
		 $this->db->or_like('city',$Search[0],'both');
		 for ($i=1; $i <$wordCount ; $i++) { 
		 	$this->db->or_like('title',$Search[$i],'both');
		 	$this->db->or_like('description',$Search[$i],'both');
		 	$this->db->or_like('city',$Search[0],'both');
		 }
		 $travelling = $this->db->get();
		 foreach ($travelling->result_array() as $value) {
		 	array_push($TravellingSrch, $value['travelid']);
		 }

		$searchData['travelling'] = $TravellingSrch;
		$travellingData = implode(',', $searchData['travelling']);
		if($travellingData!=null){
		$travellingQuery = "select * from travelling INNER JOIN travelling_img on travelling.travelid =  travelling_img.travelid where travelling.travelid in(".$travellingData.") GROUP BY travelling.travelid";
			$data['travellingResult'] = $this->db->query($travellingQuery)->result_array();
		}
		$data["query"] = $q;
		$this->load->view('pages/travelling/search/Director',$data);

	}
}
