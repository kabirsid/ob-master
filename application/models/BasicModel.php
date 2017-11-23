<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class BasicModel extends CI_Model{
	public function index(){
		session_start();
	}
	
	//Validate signin
	public function validate_signin($data){

		$success=$this->db->get_where('register',$data)->result_array();
		$email =  $data['email'];
		
		if(count($success) > 0)
		{
				$user_details = $this->db->query("select * from register where email='$email'");
				foreach ($user_details->result() as $row)
				{
					$status =  $row->status;
					if($status == 0){
						$this->session->set_flashdata('message','You need to verify your email id');
						redirect(base_url().'index.php/Login/resendotp');
					}else{
						foreach ($success as $row){
							$userid = $row['reg_id'];
						}
						$_SESSION['userid']=$userid;
						$this->session->set_flashdata('message','Sigin Successfully');
						redirect(base_url().'index.php/Basic_Controller/user_profile');
					}
				}
		}
		else{
			$this->session->set_flashdata('message','Login Failed,invaid email or password');
			redirect(base_url().'index.php/login/login');
		}
	}
	//OTP email (SignIN)
	public function email($email){
		$otp=rand(111111,999999);
		$config['protocol'] = 'smtp';
		$config['smtp_host'] = 'ssl://smtp.gmail.com';//localhost OR smtp.secureserver.net OR relay-hosting.secureserver.net (Godaddy)
		$config['smtp_timeout']=5;
		$config['smtp_port'] = '465'; // 25 (Godaddy)
		$config['smtp_user'] = 'offersbullhelp@gmail.com';
		$config['smtp_pass'] = 'Gilbilerahul@123';
		$config['mailtype'] = 'html';
		$config['charset'] = 'utf-8';
		$config['newline'] = "\r\n";
		$config['wordwrap'] = TRUE;
		$this->load->library('email');
		$this->email->initialize($config);
	
		$this->email->from('offersbullhelp@gmail.com', 'OffersBull');
		$this->email->to($email);
		$this->email->subject('OFFERS BULL Verification');
		$this->email->message('Please verify your account, Your OTP is:'.$otp);
		$this->otp($otp,$email);
		return $this->email->send();
	}
	public function otp($otp,$email){
		$this->db->set('otp',$otp);
		$this->db->set('status',0);
		$this->db->where('email',$email);
		$this->db->update('register');
	}
	public function updateprofile(){
		$userid = $_SESSION['userid'];
		$mobile = $this->input->post('mobile');
		$address = $this->input->post('address');
		$city = $this->input->post('city');
		$this->db->set('mobile',$mobile);
		$this->db->set('address',$address);
		$this->db->set('city',$city);
		$this->db->where('reg_id',$userid);
		$this->db->update('register');
	}
	/* ************************************************************
	 * 					REALESTATE
	 *************************************************************/
	public function insert_user_realestate($realid){
		$userid = $_SESSION['userid'];
		$data['name']=$this->input->post('name');
		$data['title']=$this->input->post('title');
		$data['type']=$this->input->post('type');
		$data['address']=$this->input->post('address');
		$data['builtup']=$this->input->post('builtup');
		$data['price']=$this->input->post('price');
		$data['description']=$this->input->post('description');
		$data['mobile']=$this->input->post('mobile');
		$data['email']=$this->input->post('email');
		$data['amenities']=$this->input->post('facilities');
		$data['city']=$this->input->post('city');
		$data['area']=$this->input->post('area');
		date_default_timezone_set('Asia/Kolkata');
		$data['date']=date('Y-m-d H:i:s');
		$data['offerend']=$this->input->post('offerend');
		$data['category']=0;
		$data['userid']=$userid;
		$this->db->insert('realestate',$data);
	}
	public function update_user_realestate($realid){
			$data['name'] = $this->input->post('name');
			$data['title'] = $this->input->post('title');
			$data['type'] = $this->input->post('type');
			$data['address'] = $this->input->post('address');
			$data['builtup'] = $this->input->post('builtup');
			$data['price'] = $this->input->post('price');
			$data['description'] = $this->input->post('description');
			$data['mobile'] = $this->input->post('mobile');
			$data['email'] = $this->input->post('email');
			$data['amenities'] = $this->input->post('facilities');
			$data['city'] = $this->input->post('city');
			$data['area'] = $this->input->post('area');
			date_default_timezone_set('Asia/Kolkata');
			$data['date'] = date('Y-m-d H:i:s');
			$data['offerend'] = $this->input->post('offerend');	
 			$data['category'] = 0;
			$data['userid'] = $_SESSION['userid'];
			$this->db->where('userid',$data['userid']);
			$this->db->where('realid',$realid);
			$this->db->update('realestate',$data);
	}
	/* ************************************************************
	 * 					TUTION
	 *************************************************************/
	public function insert_user_tution($tutid){
		$userid = $_SESSION['userid'];
		$data['name']=$this->input->post('name');
		$data['title']=$this->input->post('title');
		$data['address']=$this->input->post('address');
		$data['description']=$this->input->post('description');
		$data['mobile']=$this->input->post('mobile');
		$data['email']=$this->input->post('email');
		$data['city']=$this->input->post('city');
		$data['area']=$this->input->post('area');
		date_default_timezone_set('Asia/Kolkata');
		$data['date']=date('Y-m-d H:i:s');
		$data['offerend']=$this->input->post('offerend');
		$data['category']=1;
		$data['userid']=$userid;
		$this->db->insert('tution',$data);
	}
	public function update_user_tution($tutid){
		$data['name'] = $this->input->post('name');
		$data['title'] = $this->input->post('title');
		$data['address'] = $this->input->post('address');
		$data['description'] = $this->input->post('description');
		$data['mobile'] = $this->input->post('mobile');
		$data['email'] = $this->input->post('email');
		$data['city'] = $this->input->post('city');
		$data['area'] = $this->input->post('area');
		date_default_timezone_set('Asia/Kolkata');
		$data['date'] = date('Y-m-d H:i:s');
		$data['offerend'] = $this->input->post('offerend');
		$data['category'] = 1;
		$data['userid'] = $_SESSION['userid'];
		$this->db->where('userid',$data['userid']);
		$this->db->where('tutid',$tutid);
		$this->db->update('tution',$data);
	}
	/* ************************************************************
	 * 					HOTEL
	 *************************************************************/
	public function insert_user_hotel($hotelid,$services){
		$userid = $_SESSION['userid'];
		$data['name']=$this->input->post('name');
		$data['title']=$this->input->post('title');
		$data['type']=$this->input->post('type');
		$data['price']=$this->input->post('price');
		$data['address']=$this->input->post('address');
		$data['description']=$this->input->post('description');
		$data['mobile']=$this->input->post('mobile');
		$data['email']=$this->input->post('email');
		$data['amenities']=$this->input->post('facilities');
		$data['city']=$this->input->post('city');
		$data['area']=$this->input->post('area');
		$data['services']=implode(",",$services);
		
		date_default_timezone_set('Asia/Kolkata');
		$data['date']=date('Y-m-d H:i:s');
		$data['offersmenu']=$this->input->post('offersmenu');
		//$data['offersdescription']=$this->input->post('offersdescription');
		$data['offersdiscount']=$this->input->post('offersdiscount');
		$data['offerend']=$this->input->post('offerend');
		$data['category']=2;
		$data['userid']=$userid;
		//$this->db->insert('hotel',);
		$this->db->insert('hotel',$data);
	}
	public function update_user_hotel($hotelid){
		$data['name'] = $this->input->post('name');
		$data['title'] = $this->input->post('title');
		$data['type']=$this->input->post('type');
		$data['price']=$this->input->post('price');
		$data['address'] = $this->input->post('address');
		$data['description'] = $this->input->post('description');
		$data['mobile'] = $this->input->post('mobile');
		$data['email'] = $this->input->post('email');
		$data['amenities']=$this->input->post('facilities');
		$data['city'] = $this->input->post('city');
		$data['area'] = $this->input->post('area');
		date_default_timezone_set('Asia/Kolkata');
		$data['date'] = date('Y-m-d H:i:s');
		$data['offersmenu']=$this->input->post('offersmenu');
		$data['offersdescription']=$this->input->post('offersdescription');
		$data['offersdiscount']=$this->input->post('offersdiscount');
		$data['offerend'] = $this->input->post('offerend');
		$data['category'] = 2;
		$data['userid'] = $_SESSION['userid'];
		$this->db->where('userid',$data['userid']);
		$this->db->where('hotelid',$hotelid);
		$this->db->update('hotel',$data);
	}
	/* ************************************************************
	 * 					TRAVELLING
	 *************************************************************/
	public function insert_user_travelling($travelid){
		$userid = $_SESSION['userid'];
		$data['name']=$this->input->post('name');
		$data['title']=$this->input->post('title');
		$data['type']=$this->input->post('type');
		$data['address']=$this->input->post('address');
		$data['price']=$this->input->post('price');
		$data['mobile']=$this->input->post('mobile');
		$data['email']=$this->input->post('email');
		$data['description']=$this->input->post('description');
		$data['city']=$this->input->post('city');
		$data['area']=$this->input->post('area');
		date_default_timezone_set('Asia/Kolkata');
		$data['date']=date('Y-m-d H:i:s');
		$data['offerend']=$this->input->post('offerend');
		$data['category']=3;
		$data['userid']=$userid;
		$this->db->insert('travelling',$data);
	}
	public function update_user_travelling($travelid){
		$data['name'] = $this->input->post('name');
		$data['title'] = $this->input->post('title');
		$data['type']=$this->input->post('type');
		$data['address'] = $this->input->post('address');
		$data['price'] = $this->input->post('price');
		$data['mobile'] = $this->input->post('mobile');
		$data['email'] = $this->input->post('email');
		$data['description'] = $this->input->post('description');
		$data['city'] = $this->input->post('city');
		$data['area'] = $this->input->post('area');
		date_default_timezone_set('Asia/Kolkata');
		$data['date'] = date('Y-m-d H:i:s');
		$data['offerend'] = $this->input->post('offerend');
		$data['category'] = 3;
		$data['userid'] = $_SESSION['userid'];
		$this->db->where('userid',$data['userid']);
		$this->db->where('travelid',$travelid);
		$this->db->update('travelling',$data);
	}
	/* ************************************************************
	 * 					AUTOMOBILE
	 *************************************************************/
	public function insert_user_automobile($autoid){
		$userid = $_SESSION['userid'];
		$data['name']=$this->input->post('name');
		$data['title']=$this->input->post('title');
		$data['type']=$this->input->post('type');
		$data['address']=$this->input->post('address');
		$data['description']=$this->input->post('description');
		$data['mobile']=$this->input->post('mobile');
		$data['email']=$this->input->post('email');
		$data['city']=$this->input->post('city');
		$data['area']=$this->input->post('area');
		date_default_timezone_set('Asia/Kolkata');
		$data['date']=date('Y-m-d H:i:s');
		$data['offerend']=$this->input->post('offerend');
		$data['category']=4;
		$data['userid']=$userid;
		$this->db->insert('automobile',$data);
	}
	public function update_user_automobile($autoid){
		$data['name'] = $this->input->post('name');
		$data['title'] = $this->input->post('title');
		$data['type'] = $this->input->post('type');
		$data['address'] = $this->input->post('address');
		$data['description'] = $this->input->post('description');
		$data['mobile'] = $this->input->post('mobile');
		$data['email'] = $this->input->post('email');
		$data['city'] = $this->input->post('city');
		$data['area'] = $this->input->post('area');
		date_default_timezone_set('Asia/Kolkata');
		$data['date'] = date('Y-m-d H:i:s');
		$data['offerend'] = $this->input->post('offerend');
		$data['category'] = 0;
		$data['userid'] = $_SESSION['userid'];
		$this->db->where('userid',$data['userid']);
		$this->db->where('autoid',$autoid);
		$this->db->update('automobile',$data);
	}
	/* ************************************************************
	 * 					OTHER
	 *************************************************************/
	public function insert_user_other($otherid){
		$userid = $_SESSION['userid'];
		$data['name']=$this->input->post('name');
		$data['title']=$this->input->post('title');
		$data['type']=$this->input->post('type');
		$data['price']=$this->input->post('price');
		$data['address']=$this->input->post('address');
		$data['description']=$this->input->post('description');
		$data['mobile']=$this->input->post('mobile');
		$data['email']=$this->input->post('email');
		$data['city']=$this->input->post('city');
		$data['area']=$this->input->post('area');
		date_default_timezone_set('Asia/Kolkata');
		$data['date']=date('Y-m-d H:i:s');
		$data['offerend']=$this->input->post('offerend');
		$data['category']=5;
		$data['userid']=$userid;
		$this->db->insert('other',$data);
	}
	public function update_user_other($otherid){
		$data['name'] = $this->input->post('name');
		$data['title'] = $this->input->post('title');
		$data['address'] = $this->input->post('address');
		$data['description'] = $this->input->post('description');
		$data['mobile'] = $this->input->post('mobile');
		$data['email'] = $this->input->post('email');
		$data['city'] = $this->input->post('city');
		$data['area'] = $this->input->post('area');
		date_default_timezone_set('Asia/Kolkata');
		$data['date'] = date('Y-m-d H:i:s');
		$data['offerend'] = $this->input->post('offerend');
		$data['category'] = 5;
		$data['userid'] = $_SESSION['userid'];
		$this->db->where('userid',$data['userid']);
		$this->db->where('otherid',$otherid);
		$this->db->update('other',$data);
	}

	/* ************************************************************
	 * 					FREE POST
	 *************************************************************/

	public function insert_user_freepost($freepost_id){
		$userid = $_SESSION['userid'];
		$data['name']=$this->input->post('name');
		$data['email']=$this->input->post('email');
		$data['mobile']=$this->input->post('mobile');
		$data['title']=$this->input->post('title');
		$data['address']=$this->input->post('address');
		$data['city']=$this->input->post('city');

		$data['description']=$this->input->post('description');
		date_default_timezone_set('Asia/Kolkata');
		$data['date']=date('Y-m-d H:i:s');
		$data['category']=6;
		$data['userid']=$userid;
		$this->db->insert('freepost',$data);
	}
	
	/* ************************************************************
	 * 					ALL SEARCHES
	 *************************************************************/
	public function real_search($data){
		$city = $data['city'];
		$type = $data['type'];
		$price = $data['price'];
		if($price==0){
		$str="SELECT * FROM realestate WHERE realestate.city = '$city' AND realestate.type = '$type' AND realestate.price BETWEEN 0 AND 9999";

		}elseif ($price==1){
			$str="select * from realestate where city='$city' and type='$type' and price BETWEEN 10000 AND 49999";
		}
		elseif ($price==2){
			$str="select * from realestate where city='$city' and type='$type' and price BETWEEN 50000 AND 99999";
		}
		elseif ($price==3){
			$str="select * from realestate where city='$city' and type='$type' and price BETWEEN 100000 AND 4999999";
		}
		else{
			$str="select * from realestate where city='$city' and type='$type' and price >=5000000";
		}
		//$query="select * from realestate where city='$city' and type='$type' and price '$str'";
		//echo $str;die();
// 		$where="city='$city' AND type='$type' AND 	price '$str'";
// 		$this->db->select('*');
// 		$this->db->where("city='$city' AND type='$type' AND 	price <=$price");
// 		$this->db->from('realestate');
		//$this->db->where($str);
		return $this->db->query($str)->result();
	//return	$this->db->get('realestate',5,$this->uri->segment(3))->result();
	}
	public function tution_search($data){
		$city = $data['city'];
		$type = $data['type'];
			$str="select * from tution where city='$city' and title='$type'";
		return $this->db->query($str)->result_array();
	}
	public function hotel_search($data){
		$city = $data['city'];
		$type = $data['type'];
		$price = $data['price'];
		if($price==0){
			$str="select * from hotel where city='$city' and type='$type' and price BETWEEN 0 AND 9999";
		}elseif ($price==1){
			$str="select * from hotel where city='$city' and type='$type' and price BETWEEN 10000 AND 49999";
		}
		elseif ($price==2){
			$str="select * from hotel where city='$city' and type='$type' and price BETWEEN 50000 AND 99999";
		}
		elseif ($price==3){
			$str="select * from hotel where city='$city' and type='$type' and price BETWEEN 100000 AND 4999999";
		}
		else{
			$str="select * from hotel where city='$city' and type='$type' and price >=5000000";
		}
		return $this->db->query($str)->result_array();
	}
	public function automobile_search($data){
		$city = $data['city'];
		$type = $data['type'];
		$str="select * from automobile where city='$city' and type='$type'";
		return $this->db->query($str)->result_array();
	}
	public function travelling_search($data){
		$city = $data['city'];
		$type = $data['type'];
		$title=$city.' to '.$type;
		$str="select * from travelling	 where title='$title'";
		return $this->db->query($str)->result_array();
	}
	public function other_search($data){
		$city = $data['city'];
		$type = $data['type'];
		$str="select * from other where city='$city' and title='$type'";
		return $this->db->query($str)->result_array();
	}
	/* ************************************************************
	 * 					Main SEARCHES
	 *************************************************************/
	public function main_search(){
		$data=$this->input->post('Search');
		$category=$this->input->post('category');
		//$data=explode(" ",$data);
		if($category=="tution" || $category=="travelling" || $category=="other"){
			$this->db->select('*');
			$this->db->from($category);
			//	$this->db->or_from('tution');.
			$this->db->like('title',$data);
			$this->db->or_like('city',$data);
			return $this->db->get()->result_array();
		}else{
		$this->db->select('*');	
		$this->db->from($category);
		//	$this->db->or_from('tution');
		$this->db->like('title',$data,'both');
		$this->db->or_like('type',$data,'both');
		$this->db->or_like('city',$data,'both');
		$this->db->or_like('area',$data,'both');
		return $this->db->get()->result_array();
		}

	}
		//userinformation

		public function userinfo($data)
		{
			{
			$this->db->insert('userinfo',$data);
			//$this->session->set_flashdata('message',' password');
			//redirect(base_url().'index.php/views/pages/Hotel/view/ViewDirector');
			}

		}
		
	
	
}
?>