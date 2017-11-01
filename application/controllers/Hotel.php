<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hotel extends CI_Controller {
	public function index()
	{
			$this->load->library('pagination');
			$config = array();
			$config["base_url"] = base_url()."index.php/Hotel/index";
			$config["per_page"] = 8;
			$config["num_links"] =5;
			$config["uri_segment"] =3;
			$config["total_rows"] = $this->db->get('hotel')->num_rows();
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
			$this->db->from('hotel');
			$this->db->join('hotel_img','hotel.hotelid = hotel_img.hotelid','INNER');
			$this->db->group_by('hotel.hotelid');
			$this->db->offset($offset);
			$this->db->limit($limit,$offset);
			//passing data
			$data['Hotel'] =$this->db->get();
			$this->load->view('pages/hotel/Director',$data);
	}
	public function view($hotelid){
			$this->db->select('*');
			$this->db->from('hotel');
			$this->db->join('hotel_img','hotel.hotelid=hotel_img.hotelid','INNER');
			$this->db->where('hotel.hotelid',$hotelid);
		$data['HotelView'] = $this->db->get()->result_array();
			$this->db->select('*');
			$this->db->from('hotel');
			$this->db->join('hotel_img','hotel.hotelid=hotel_img.hotelid');
			$this->db->group_by('hotel.hotelid');
			$this->db->order_by('rand()');
			$this->db->limit(4);
		$data['SimilarResults'] = $this->db->get()->result_array();
		//Counter to update visits of each record.
		$view_count_query = "update hotel set visits = visits+1 where hotelid = $hotelid";
		$this->db->query($view_count_query);
		$this->load->view('pages/hotel/view/ViewDirector',$data);	
	}
	public function search(){
		$hotelSrch = array();
		 $q = $this->input->post('q');
		 $q = preg_replace('/[^\p{L}\p{N}\s]/u',' ', $q);
		 $wordCount = str_word_count($q);
		 $Search = explode(' ', $q);
		 $this->db->select("hotel.title,hotel.hotelid");
		 $this->db->from('hotel');
		 $this->db->like('title',$Search[0],'both');
		 $this->db->or_like('description',$Search[0],'both');
		 $this->db->or_like('city',$Search[0],'both');
		 for ($i=1; $i <$wordCount ; $i++) { 
		 	$this->db->or_like('title',$Search[$i],'both');
		 	$this->db->or_like('description',$Search[$i],'both');
		 	$this->db->or_like('city',$Search[0],'both');
		 }
		 $hotel = $this->db->get();
		 foreach ($hotel->result_array() as $value) {
		 	array_push($hotelSrch, $value['hotelid']);
		 }
		 $searchData['hotel'] = $hotelSrch; 
		 $hotelData = implode(',', $searchData['hotel']);
		 if($hotelData!=null){
	$hotelQuery = "select * from hotel INNER JOIN hotel_img on hotel.hotelid =  hotel_img.hotelid where hotel.hotelid in(".$hotelData.") GROUP BY hotel.hotelid";
		$data['hotelResult'] = $this->db->query($hotelQuery)->result_array();
	}
		$data["query"] = $q;
		$this->load->view('pages/hotel/search/Director',$data);

	}
}
