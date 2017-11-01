<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Automobile extends CI_Controller {
	public function index()
	{
			$this->load->library('pagination');
			$config = array();
			$config["base_url"] = base_url()."index.php/Automobile/index";
			$config["per_page"] = 8;
			$config["num_links"] =5;
			$config["uri_segment"] =3;
			$config["total_rows"] = $this->db->get('automobile')->num_rows();
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
			$this->db->from('automobile');
			$this->db->join('automobile_img','automobile.autoid = automobile_img.autoid','INNER');
			$this->db->group_by('automobile.autoid');
			$this->db->offset($offset);
			$this->db->limit($limit,$offset);
			//passing data
			$data['Automobile'] =$this->db->get();
			$this->load->view('pages/automobile/Director',$data);
	}
	public function view($autoid){
			$this->db->select('*');
			$this->db->from('automobile');
			$this->db->join('automobile_img','automobile.autoid=automobile_img.autoid','INNER');
			$this->db->where('automobile.autoid',$autoid);
		$data['AutomobileView'] = $this->db->get()->result_array();
			$this->db->select('*');
			$this->db->from('automobile');
			$this->db->join('automobile_img','automobile.autoid=automobile_img.autoid');
			$this->db->group_by('automobile.autoid');
			$this->db->order_by('rand()');
			$this->db->limit(4);
		$data['SimilarResults'] = $this->db->get()->result_array();
		//Counter to update visits of each record.
		$view_count_query = "update automobile set visits = visits+1 where autoid = $autoid";
		$this->db->query($view_count_query);
		$this->load->view('pages/automobile/view/ViewDirector',$data);	
	}
	public function search(){
		 $AutomobileSrch = array();
		 $q = $this->input->post('q');
		 $q = preg_replace('/[^\p{L}\p{N}\s]/u',' ', $q);
		 $wordCount = str_word_count($q);
		 $Search = explode(' ', $q);
		 $this->db->select("automobile.title,automobile.autoid");
		 $this->db->from('automobile');
		 $this->db->like('title',$Search[0],'both');
		 $this->db->or_like('description',$Search[0],'both');
		 $this->db->or_like('city',$Search[0],'both');
		 for ($i=1; $i <$wordCount ; $i++) { 
		 	$this->db->or_like('title',$Search[$i],'both');
		 	$this->db->or_like('description',$Search[$i],'both');
		 	$this->db->or_like('city',$Search[0],'both');
		 }
		 $automobile = $this->db->get();
		 foreach ($automobile->result_array() as $value) {
		 	array_push($AutomobileSrch, $value['autoid']);
		 }
		 $searchData['automobile'] = $AutomobileSrch; 
		 $automobileData = implode(',', $searchData['automobile']);
		 if($automobileData!=null){
	$automobileQuery = "select * from automobile INNER JOIN automobile_img on automobile.autoid =  automobile_img.autoid where automobile.autoid in(".$automobileData.") GROUP BY automobile.autoid";
		$data['automobileResult'] = $this->db->query($automobileQuery)->result_array();
	}
	$data["query"] = $q;
		$this->load->view('pages/automobile/search/Director',$data);

	}
}
