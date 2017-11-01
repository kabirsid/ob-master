<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {
	public function index()
	{
		 $q = $this->input->post('q');
		 $q = preg_replace('/[^\p{L}\p{N}\s]/u',' ', $q);
		 $realestateSrch = array();
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

		 // Hotels
		 $hotelSrch = array();
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

		 // Tuition
		 $TuitionSrch = array();
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

		 // Travelling
		 $TravellingSrch = array();
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

		 // Automobile
		 $AutomobileSrch = array();
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

		 // Other
		 $OtherSrch = array();
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
		 // Final result
		 $searchData['realestate'] = $realestateSrch;
		 $searchData['hotel'] = $hotelSrch; 
		 $searchData['tution'] = $TuitionSrch; 
		 $searchData['travelling'] = $TravellingSrch; 
		 $searchData['automobile'] = $AutomobileSrch; 
		 $searchData['other'] = $OtherSrch; 

		 //Appling search keywords to query
		$realestateData = implode(',', $searchData['realestate']);
		$hotelData = implode(',', $searchData['hotel']);
		$tuitionData = implode(',', $searchData['tution']);
		$travellingData = implode(',', $searchData['travelling']);
		$automobileData = implode(',', $searchData['automobile']);
		$otherData = implode(',', $searchData['other']);
	
	if($realestateData!=null){
	$realestateQuery = "select * from realestate INNER JOIN real_img on realestate.realid =  real_img.realid where realestate.realid in(".$realestateData.") GROUP BY realestate.realid";
		$data['realestateResult'] = $this->db->query($realestateQuery)->result_array();
	}
	if($hotelData!=null){
	$hotelQuery = "select * from hotel INNER JOIN hotel_img on hotel.hotelid =  hotel_img.hotelid where hotel.hotelid in(".$hotelData.") GROUP BY hotel.hotelid";
		$data['hotelResult'] = $this->db->query($hotelQuery)->result_array();
	}
	if($tuitionData!=null){
	$tutionQuery = "select * from tution INNER JOIN tut_img on tution.tutid =  tut_img.tutid where tution.tutid in(".$tuitionData.") GROUP BY tution.tutid";
		$data['tuitionResult'] = $this->db->query($tutionQuery)->result_array();
	}
	if($travellingData!=null){
	$travellingQuery = "select * from travelling INNER JOIN travelling_img on travelling.travelid =  travelling_img.travelid where travelling.travelid in(".$travellingData.") GROUP BY travelling.travelid";
		$data['travellingResult'] = $this->db->query($travellingQuery)->result_array();
	}
	if($automobileData!=null){
	$automobileQuery = "select * from automobile INNER JOIN automobile_img on automobile.autoid =  automobile_img.autoid where automobile.autoid in(".$automobileData.") GROUP BY automobile.autoid";
		$data['automobileResult'] = $this->db->query($automobileQuery)->result_array();
	}
	if($otherData!=null){
	$otherQuery = "select * from other INNER JOIN other_img on other.otherid =  other_img.otherid where other.otherid in(".$otherData.") GROUP BY other.otherid";
		$data['otherResult'] = $this->db->query($otherQuery)->result_array();
	}
		$data["query"] = $q;
		$this->load->view("pages/search/Director",$data);
	}
}
