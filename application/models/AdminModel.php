<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class AdminModel extends CI_Model{
	public function index(){
		session_start();
	}
	// LOGIN CHECKUP	
	public function validate_signin($data){
	$success=$this->db->get_where('register',$data)->result_array();
		if(count($success) > 0)
		{
			foreach ($success as $row){
				$adminid = $row['reg_id'];
			}
			//SETTING SESSION FOR ADMIN (ADMIN ID == 0)
			if ($adminid==0){
				$_SESSION['adminid']=$adminid;
				redirect(base_url().'index.php/Admin');
			}else{
				$this->session->set_flashdata('message','Unauthorized access!!!');
				redirect(base_url().'index.php/Admin/Login');
			}
		}
		else{
			$this->session->set_flashdata('message','Login Failed, invaid email or password');
			redirect(base_url().'index.php/Admin/Login');
		}
	}
	/* ************************************************************
	 * 					REALESTATE
	 *************************************************************/
	public function insert_user_realestate(){
		$userid =  $_SESSION['adminid'];
		$data['name']=$this->input->post('name');
		$data['title']=$this->input->post('title');
		$data['type']=$this->input->post('type');
		$data['address']=$this->input->post('address');
		$data['builtup']=$this->input->post('builtup');
		$data['price']=$this->input->post('price');
		$data['description']=$this->input->post('description');
		$data['mobile']=$this->input->post('mobile');
		$data['email']=$this->input->post('email');
		$data['amenities']=$this->input->post('amenities');
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
		$data['amenities'] = $this->input->post('amenities');
		$data['city'] = $this->input->post('city');
		$data['area'] = $this->input->post('area');
		date_default_timezone_set('Asia/Kolkata');
		$data['date'] = date('Y-m-d H:i:s');
		$data['offerend'] = $this->input->post('offerend');
		$data['category'] = 0;
		$data['userid'] = $this->input->post('userid');
		
		$this->db->where('userid',$data['userid']);
		$this->db->where('realid',$realid);
		
		$this->db->update('realestate',$data);
	}
	/* ************************************************************
	 * 					TUTION
	 *************************************************************/
	public function insert_user_tution(){
		$userid =  $_SESSION['adminid'];
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
	public function update_user_tution($realid){
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
		$data['userid'] = $this->input->post('userid');
		$this->db->where('userid',$data['userid']);
		$this->db->where('tutid',$realid);
		$this->db->update('tution',$data);
	}
	
	/* ************************************************************
	 * 					HOTEL
	 *************************************************************/
	public function insert_user_hotel(){
		$userid =  $_SESSION['adminid'];
		$data['name']=$this->input->post('name');
		$data['title']=$this->input->post('title');
		$data['type']=$this->input->post('type');
		$data['address']=$this->input->post('address');
		$data['price']=$this->input->post('price');
		$data['description']=$this->input->post('description');
		$data['mobile']=$this->input->post('mobile');
		$data['email']=$this->input->post('email');
		$data['amenities']=$this->input->post('amenities');
		$data['city']=$this->input->post('city');
		$data['area']=$this->input->post('area');
		date_default_timezone_set('Asia/Kolkata');
		$data['date']=date('Y-m-d H:i:s');
		$data['offerend']=$this->input->post('offerend');
		$data['category']=2;
		$data['userid']=$userid;
		$this->db->insert('hotel',$data);
	}
	public function update_user_hotel($realid){
		$data['name'] = $this->input->post('name');
		$data['title'] = $this->input->post('title');
		$data['type'] = $this->input->post('type');
		$data['address'] = $this->input->post('address');
		$data['price'] = $this->input->post('price');
		$data['description'] = $this->input->post('description');
		$data['mobile'] = $this->input->post('mobile');
		$data['email'] = $this->input->post('email');
		$data['amenities'] = $this->input->post('amenities');
		$data['city'] = $this->input->post('city');
		$data['area'] = $this->input->post('area');
		date_default_timezone_set('Asia/Kolkata');
		$data['date'] = date('Y-m-d H:i:s');
		$data['offerend'] = $this->input->post('offerend');
		$data['category'] = 2;
		$data['userid'] = $this->input->post('userid');
		$this->db->where('userid',$data['userid']);
		$this->db->where('hotelid',$realid);
		$this->db->update('hotel',$data);
	}
	/* ************************************************************
	 * 					TRAVELLING
	 *************************************************************/
	public function insert_user_travelling(){
		$userid =  $_SESSION['adminid'];
		$data['name']=$this->input->post('name');
		$data['title']=$this->input->post('title');
		$data['address']=$this->input->post('address');
		$data['price']=$this->input->post('price');
		$data['description']=$this->input->post('description');
		$data['mobile']=$this->input->post('mobile');
		$data['email']=$this->input->post('email');
		$data['city']=$this->input->post('city');
		$data['area']=$this->input->post('area');
		date_default_timezone_set('Asia/Kolkata');
		$data['date']=date('Y-m-d H:i:s');
		$data['offerend']=$this->input->post('offerend');
		$data['category']=3;
		$data['userid']=$userid;
		$this->db->insert('travelling',$data);
	}
	public function update_user_travelling($realid){
		$data['name'] = $this->input->post('name');
		$data['title'] = $this->input->post('title');
		$data['address'] = $this->input->post('address');
		$data['price'] = $this->input->post('price');
		$data['description'] = $this->input->post('description');
		$data['mobile'] = $this->input->post('mobile');
		$data['email'] = $this->input->post('email');
		$data['city'] = $this->input->post('city');
		$data['area'] = $this->input->post('area');
		date_default_timezone_set('Asia/Kolkata');
		$data['date'] = date('Y-m-d H:i:s');
		$data['offerend'] = $this->input->post('offerend');
		$data['category'] = 2;
		$data['userid'] = $this->input->post('userid');
		$this->db->where('userid',$data['userid']);
		$this->db->where('travelid',$realid);
	
		$this->db->update('travelling',$data);
	}
	/* ************************************************************
	 * 					AUTOMOBILE
	 *************************************************************/
	public function insert_user_automobile(){
		$userid =  $_SESSION['adminid'];
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
	public function update_user_automobile($realid){
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
		$data['category'] = 4;
		$data['userid'] = $this->input->post('userid');
		$this->db->where('userid',$data['userid']);
		$this->db->where('autoid',$realid);
	
		$this->db->update('automobile',$data);
	}
	/* ************************************************************
	 * 					OTHER
	 *************************************************************/
	public function insert_user_other(){
		$userid =  $_SESSION['adminid'];
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
		$data['category']=5;
		$data['userid']=$userid;
		$this->db->insert('other',$data);
	}
	public function update_user_other($realid){
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
		$data['userid'] = $this->input->post('userid');
		$this->db->where('userid',$data['userid']);
		$this->db->where('otherid',$realid);
	
		$this->db->update('other',$data);
	}
	
	/* ************************************************************
	 * 					IMAGE UPLOAD
	 *************************************************************/
	function image_upload($path,$userid)
	{
		//	CATEGORY WISE DATABASE-TABLE AND TABLE-CONATAINTS
		//REALESTATE
		if($path=="real"){
			$category_data = array(
					'category_id' =>'realid',
					'category_table'=>'realestate',
					'category_img_table'=>'real_img'
			);
			//TUTION
		}elseif ($path=="tution"){
			$category_data = array(
					'category_id' =>'tutid',
					'category_table'=>'tution',
					'category_img_table'=>'tut_img'
			);
			//HOTEL
		}elseif ($path=="hotel"){
			$category_data = array(
					'category_id' =>'hotelid',
					'category_table'=>'hotel',
					'category_img_table'=>'hotel_img'
			);
			//TRAVELLING
		}elseif ($path=="travelling"){
			$category_data = array(
					'category_id' =>'travelid',
					'category_table'=>'travelling',
					'category_img_table'=>'travelling_img'
			);
			//AUTOMOBILE
		}elseif ($path=="automobile"){
			$category_data = array(
					'category_id' =>'autoid',
					'category_table'=>'automobile',
					'category_img_table'=>'automobile_img'
			);
			//OTHER
		}elseif ($path="other"){
			$category_data = array(
					'category_id' =>'otherid',
					'category_table'=>'other',
					'category_img_table'=>'other_img'
			);
		}
		//IMAGE UPLOAD STARTS HERE
		$basepath = "uploads/".$path;
		chdir($basepath);
		if(!file_exists($userid)){
			mkdir($userid);
			chdir($userid);
			$filesCount = count($_FILES['image']['name']);
			for($i = 0; $i < $filesCount; $i++){
				$_FILES['img']['name'] = $_FILES['image']['name'][$i];
				$_FILES['img']['type'] = $_FILES['image']['type'][$i];
				$_FILES['img']['tmp_name'] = $_FILES['image']['tmp_name'][$i];
				$_FILES['img']['error'] = $_FILES['image']['error'][$i];
				$_FILES['img']['size'] = $_FILES['image']['size'][$i];
					
				date_default_timezone_set('Asia/Kolkata');
				$timestamp = date("Y-m-d_H-i-s_");
				$config['upload_path']=  FCPATH.$basepath."/".$userid."/";
				$config['file_name']=$timestamp.$i.'.jpg';
				$config['allowed_types']= 'jpg|png';
				$config['max_size']= 5120;

				$this->load->library('upload', $config);
				$this->upload->initialize($config);
					
				if ( ! $this->upload->do_upload('img'))
				{
					$error = array('error' => $this->upload->display_errors());
				}
				else
				{
					$da =$this->upload->data();
						$image_path =$basepath."/".$userid."/".$config['file_name'];
						//echo $image_path;die();
						$config['image_library'] = 'gd2';
						$config['source_image'] =  $da['full_path'];
						$config['create_thumb'] = FALSE;
						$config['maintain_ratio'] = TRUE;
						$config['quality']      = 100;
						$config['width']         = 600;
						$config['height']       = 350;
						$this->image_lib->clear();
						$this->load->library('image_lib', $config);
						$this->image_lib->initialize($config);
						$this->image_lib->resize();
					$category_id = $category_data['category_id'];
					$category_table = $category_data['category_table'];
					$category_img_table = $category_data['category_img_table'];
	
					$query = $this->db->query("SELECT $category_id from $category_table where userid='$userid' ORDER BY date DESC LIMIT 1");
					$row = $query->row();
					$cat_id =  $row->$category_id;
					$pathdata = array(
							'path'=>$image_path,
							$category_id=>$cat_id,
					);
					$this->db->insert($category_img_table,$pathdata);
				}
			}
		}else{	//IF userid folder already exist
			chdir($userid);
			$filesCount = count($_FILES['image']['name']);
			for($i = 0; $i < $filesCount; $i++){
				$_FILES['img']['name'] = $_FILES['image']['name'][$i];
				$_FILES['img']['type'] = $_FILES['image']['type'][$i];
				$_FILES['img']['tmp_name'] = $_FILES['image']['tmp_name'][$i];
				$_FILES['img']['error'] = $_FILES['image']['error'][$i];
				$_FILES['img']['size'] = $_FILES['image']['size'][$i];
	
				date_default_timezone_set('Asia/Kolkata');
				$timestamp = date("Y-m-d_H-i-s_");
				$config['upload_path']=  FCPATH.$basepath."/".$userid."/";
				$config['file_name']=$timestamp.$i.'.jpg';
				$config['allowed_types']= 'jpg|png';
				$config['max_size']= 5120;
	
				$this->load->library('upload', $config);
				$this->upload->initialize($config);
	
				if ( ! $this->upload->do_upload('img'))
				{
					$error = array('error' => $this->upload->display_errors());
				}
				else
				{
					$da =$this->upload->data();
						$image_path = $basepath."/".$userid."/".$config['file_name'];
						//echo $image_path;die();
						$config['image_library'] = 'gd2';
						$config['source_image'] =  $da['full_path'];
						$config['create_thumb'] = FALSE;
						$config['maintain_ratio'] = TRUE;
						$config['quality']      = 100;
						$config['width']         = 600;
						$config['height']       = 350;
						$this->image_lib->clear();
						$this->load->library('image_lib', $config);
						$this->image_lib->initialize($config);
							
						$this->image_lib->resize();
	
					$category_id = $category_data['category_id'];
					$category_table = $category_data['category_table'];
					$category_img_table = $category_data['category_img_table'];
	
					$query = $this->db->query("SELECT $category_id from $category_table where userid='$userid' ORDER BY date DESC LIMIT 1");
					$row = $query->row();
					$cat_id =  $row->$category_id;
					$pathdata = array(
							'path'=>$image_path,
							$category_id=>$cat_id,
					);
					$this->db->insert($category_img_table,$pathdata);
				}
			}
		}
	}//Eof Image_upload
	/* ************************************************************
	 * 					IMAGE UPDATE
	 *************************************************************/
	function image_update($path,$data)
	{	
		if($path=="real"){
			$category_data = array(
					'category_id' =>'realid',
					'category_table'=>'realestate',
					'category_img_table'=>'real_img'
			);
			//TUTION
		}elseif ($path=="tution"){
			$category_data = array(
					'category_id' =>'tutid',
					'category_table'=>'tution',
					'category_img_table'=>'tut_img'
			);
			//HOTEL
		}elseif ($path=="hotel"){
			$category_data = array(
					'category_id' =>'hotelid',
					'category_table'=>'hotel',
					'category_img_table'=>'hotel_img'
			);
			//TRAVELLING
		}elseif ($path=="travelling"){
			$category_data = array(
					'category_id' =>'travelid',
					'category_table'=>'travelling',
					'category_img_table'=>'travelling_img'
			);
			//AUTOMOBILE
		}elseif ($path=="automobile"){
			$category_data = array(
					'category_id' =>'autoid',
					'category_table'=>'automobile',
					'category_img_table'=>'automobile_img'
			);
			//OTHER
		}elseif ($path="other"){
			$category_data = array(
					'category_id' =>'otherid',
					'category_table'=>'other',
					'category_img_table'=>'other_img'
			);
		}
		$basepath = "uploads/".$path;
		$imageID = $data['imgid'];
		$userid = $data['userid'];
		$result = $this->db->get_where('real_img',array('id'=>$imageID));
		$row = $result->row();
		$imagePath = $row->path;
		unlink($imagePath);
		
		$_FILES['img']['name'] = $_FILES['image']['name'];
		$_FILES['img']['type'] = $_FILES['image']['type'];
		$_FILES['img']['tmp_name'] = $_FILES['image']['tmp_name'];
		$_FILES['img']['error'] = $_FILES['image']['error'];
		$_FILES['img']['size'] = $_FILES['image']['size'];
		
		date_default_timezone_set('Asia/Kolkata');
		$timestamp = date("Y-m-d_H-i-s_");
		$config['upload_path']=  FCPATH."uploads/".$path."/".$userid."/";
		$config['file_name']=$timestamp.'.jpg';
		$config['allowed_types']= 'jpg|png';
		$config['max_size']= 5120;
		
		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		
		if ( ! $this->upload->do_upload('img'))
		{
			$error = array('error' => $this->upload->display_errors());
		}
		else
		{
			$da =$this->upload->data();
						$image_path = $basepath."/".$userid."/".$config['file_name'];
						//echo $image_path;die();
						$config['image_library'] = 'gd2';
						$config['source_image'] =  $da['full_path'];
						$config['create_thumb'] = FALSE;
						$config['maintain_ratio'] = TRUE;
						$config['quality']      = 100;
						$config['width']         = 600;
						$config['height']       = 350;
						$this->image_lib->clear();
						$this->load->library('image_lib', $config);
						$this->image_lib->initialize($config);
							
						$this->image_lib->resize();
			
			$category_id = $category_data['category_id'];
			$category_table = $category_data['category_table'];
			$category_img_table = $category_data['category_img_table'];
		
			$this->db->query("UPDATE $category_img_table set path='$image_path' where id=$imageID");
		}
		
	}//Eof Image_update
	/* ************************************************************
	 * 					ADD  MORE  Images
	 *************************************************************/
	function image_upload_new($path,$realid)// Dont change realid >>realid<< here used for postid of every category
	{
		$userid = $_SESSION['adminid'];
		//	CATEGORY WISE DATABASE-TABLE AND TABLE-CONATAINTS
		//REALESTATE
		if($path=="real"){
			$category_data = array(
					'category_id' =>'realid',
					'category_table'=>'realestate',
					'category_img_table'=>'real_img'
			);
			//TUTION
		}elseif ($path=="tution"){
			$category_data = array(
					'category_id' =>'tutid',
					'category_table'=>'tution',
					'category_img_table'=>'tut_img'
			);
			//HOTEL
		}elseif ($path=="hotel"){
			$category_data = array(
					'category_id' =>'hotelid',
					'category_table'=>'hotel',
					'category_img_table'=>'hotel_img'
			);
			//TRAVELLING
		}elseif ($path=="travelling"){
			$category_data = array(
					'category_id' =>'travelid',
					'category_table'=>'travelling',
					'category_img_table'=>'travelling_img'
			);
			//AUTOMOBILE
		}elseif ($path=="automobile"){
			$category_data = array(
					'category_id' =>'autoid',
					'category_table'=>'automobile',
					'category_img_table'=>'automobile_img'
			);
			//OTHER
		}elseif ($path="other"){
			$category_data = array(
					'category_id' =>'otherid',
					'category_table'=>'other',
					'category_img_table'=>'other_img'
			);
		}
		//IMAGE UPLOAD STARTS HERE
		$basepath = "uploads/".$path;
		chdir($basepath);
		if(!file_exists($userid)){
			mkdir($userid);
			chdir($userid);
			$filesCount = count($_FILES['image']['name']);
			for($i = 0; $i < $filesCount; $i++){
				$_FILES['img']['name'] = $_FILES['image']['name'][$i];
				$_FILES['img']['type'] = $_FILES['image']['type'][$i];
				$_FILES['img']['tmp_name'] = $_FILES['image']['tmp_name'][$i];
				$_FILES['img']['error'] = $_FILES['image']['error'][$i];
				$_FILES['img']['size'] = $_FILES['image']['size'][$i];
					
				date_default_timezone_set('Asia/Kolkata');
				$timestamp = date("Y-m-d_H-i-s_");
				$config['upload_path']=  FCPATH.$basepath."/".$userid."/";
				$config['file_name']=$timestamp.$i.'.jpg';
				$config['allowed_types']= 'jpg|png';
				$config['max_size']= 2048;
	
				$this->load->library('upload', $config);
				$this->upload->initialize($config);
					
				if ( ! $this->upload->do_upload('img'))
				{
					$error = array('error' => $this->upload->display_errors());
				}
				else
				{
					$da = array('upload_data' => $this->upload->data());
					$image_path = $basepath."/".$userid."/".$config['file_name'];
	
					$category_id = $category_data['category_id'];
					$category_table = $category_data['category_table'];
					$category_img_table = $category_data['category_img_table'];
	
// 					$query = $this->db->query("SELECT $category_id from $category_table where userid='$userid' ORDER BY date DESC LIMIT 1");
// 					$row = $query->row();
					$cat_id =  $realid;
					$pathdata = array(
							'path'=>$image_path,
							$category_id=>$cat_id,
					);
					$this->db->insert($category_img_table,$pathdata);
				}
			}
		}else{	//IF userid folder already exist
			chdir($userid);
			$filesCount = count($_FILES['image']['name']);
			for($i = 0; $i < $filesCount; $i++){
				$_FILES['img']['name'] = $_FILES['image']['name'][$i];
				$_FILES['img']['type'] = $_FILES['image']['type'][$i];
				$_FILES['img']['tmp_name'] = $_FILES['image']['tmp_name'][$i];
				$_FILES['img']['error'] = $_FILES['image']['error'][$i];
				$_FILES['img']['size'] = $_FILES['image']['size'][$i];
	
				date_default_timezone_set('Asia/Kolkata');
				$timestamp = date("Y-m-d_H-i-s_");
				$config['upload_path']=  FCPATH.$basepath."/".$userid."/";
				$config['file_name']=$timestamp.$i.'.jpg';
				$config['allowed_types']= 'jpg|png';
				$config['max_size']= 2048;
	
				$this->load->library('upload', $config);
				$this->upload->initialize($config);
	
				if ( ! $this->upload->do_upload('img'))
				{
					$error = array('error' => $this->upload->display_errors());
				}
				else
				{
					$da = array('upload_data' => $this->upload->data());
					$image_path = $basepath."/".$userid."/".$config['file_name'];
	
					$category_id = $category_data['category_id'];
					$category_table = $category_data['category_table'];
					$category_img_table = $category_data['category_img_table'];
	
// 					$query = $this->db->query("SELECT $category_id from $category_table where userid='$userid' ORDER BY date DESC LIMIT 1");
// 					$row = $query->row();
					$cat_id =  $realid;
					$pathdata = array(
							'path'=>$image_path,
							$category_id=>$cat_id,
					);
					$this->db->insert($category_img_table,$pathdata);
				}
			}
		}
	}//Eof Image_upload_new
	
}