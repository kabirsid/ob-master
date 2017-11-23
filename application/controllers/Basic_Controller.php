<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Basic_Controller extends CI_Controller{
		public function index()
		{
			$this->load->view('layout/index');
		}
		public function user_logout(){
			unset($_SESSION['userid']);
			$this->session->set_flashdata('message','Successfully logout');
			redirect(base_url().'index.php/Login/login');
		}
		public function user_profile(){
				$data['pagename']="myprofile.php";
				$this->load->view('pages/profile/profile',$data);
		}
		/* ************************************************************
		 * 					REALESTATE
		 *************************************************************/
		public function user_realestate($task='',$realid=''){
			if($task=='create'){
				$userid=$_SESSION['userid'];
				$this->BasicModel->insert_user_realestate($realid);
				$this->image_upload('real',$userid);
				$this->session->set_flashdata('message','Data Uploaded Successfully');
				redirect(base_url() . 'index.php/Basic_Controller/user_realestate');
			}
			if($task=='update'){
				$this->BasicModel->update_user_realestate($realid);
				//$this->image_upload('real',$userid);
				$this->session->set_flashdata('message','Data Updated Successfully');
				//$data['pagename']="realestate_view.php";
				redirect(base_url() . 'index.php/Basic_Controller/user_realestate_view');
			}
			if($task=='delete'){
				$userid = $_SESSION['userid'];
				$delete_img ="select path from real_img where realid=$realid";
				$delete_res = $this->db->query($delete_img);
				foreach ($delete_res->result_array() as $val) {
					$path = $val['path'];
				}
				echo $path;
				unlink($path);
				$query = "DELETE FROM realestate WHERE realid='$realid' and userid='$userid'";
				$this->db->query($query);
				if($this->db->affected_rows()){
					$this->session->set_flashdata('message','Record deleted !');
				}else{
					$this->session->set_flashdata('message','Record not found');
				}
				redirect(base_url() . 'index.php/Basic_Controller/user_realestate');
				//$data['pagename']="realestate_view.php";
			}
			$data['pagename']="realestate.php";
			$this->load->view('pages/profile/profile',$data);
		}
		public function user_realestate_view(){
			$data['pagename']="realestate_view.php";
			$this->load->view('pages/profile/profile',$data);
		}
		public function user_realestate_edit($realid){
			$userid = $_SESSION['userid'];
			$data['realid'] = $realid;
			$data['pagename']="edit_realestate.php";
			$this->load->view('pages/profile/profile',$data);
		}
		/* ************************************************************
		 *		 					TUTION
		 *************************************************************/
		public function user_tution($task='',$tutid=''){
			if($task=='create'){
				$userid=$_SESSION['userid'];
				$this->BasicModel->insert_user_tution($tutid);
				$this->image_upload('tution',$userid);
				$this->session->set_flashdata('message','Data Uploaded Successfully');
				redirect(base_url() . 'index.php/Basic_Controller/user_tution');
			}
			if($task=='update'){
				$this->BasicModel->update_user_tution($tutid);
				//$this->image_upload('real',$userid);
				$this->session->set_flashdata('message','Data Updated Successfully');
				//$data['pagename']="realestate_view.php";
				redirect(base_url() . 'index.php/Basic_Controller/user_tution_view');
			}
			if($task=='delete'){
				$userid = $_SESSION['userid'];
				$delete_img ="select path from tut_img where tutid=$tutid";
				$delete_res = $this->db->query($delete_img);
				foreach ($delete_res->result_array() as $val) {
					$path = $val['path'];
				}
				echo $path;
				unlink($path);
				$query = "DELETE FROM tution WHERE tutid='$tutid' and userid='$userid'";
				$this->db->query($query);
				if($this->db->affected_rows()){
					$this->session->set_flashdata('message','Record deleted !');
				}else{
					$this->session->set_flashdata('message','Record not found');
				}
				redirect(base_url() . 'index.php/Basic_Controller/user_tution_view');
				//$data['pagename']="realestate_view.php";
			}
			$data['pagename']="tution.php";
			$this->load->view('pages/profile/profile',$data);
		}
		public function user_tution_view(){
			$data['pagename']="tution_view.php";
			$this->load->view('pages/profile/profile',$data);
		}
		public function user_tution_edit($tutid){
			$userid = $_SESSION['userid'];
			$data['tutid'] = $tutid;
			$data['pagename']="edit_tution.php";
			$this->load->view('pages/profile/profile',$data);
		}
		/* ************************************************************
		 *		 					HOTEL
		 *************************************************************/
		public function user_hotel($task='',$hotelid=''){
			if($task=='create'){
				$userid=$_SESSION['userid'];
				$services=$this->input->post('services');
				//$b=implode(",",$services);
				$this->BasicModel->insert_user_hotel($hotslid,$services);
				$this->image_upload('hotel',$userid);
				$this->session->set_flashdata('message','Data Uploaded Successfully');
				redirect(base_url() . 'index.php/Basic_Controller/user_hotel');
			}
			if($task=='update'){
				$this->BasicModel->update_user_hotel($hotelid);
				//$this->image_upload('real',$userid);
				$this->session->set_flashdata('message','Data Updated Successfully');
				//$data['pagename']="realestate_view.php";
				redirect(base_url() . 'index.php/Basic_Controller/user_hotel_view');
			}
			if($task=='delete'){
				$userid = $_SESSION['userid'];
				$delete_img ="select path from hotel_img where hotelid=$hotelid";
				$delete_res = $this->db->query($delete_img);
				foreach ($delete_res->result_array() as $val) {
					$path = $val['path'];
				}
				echo $path;
				unlink($path);
				$query = "DELETE FROM hotel WHERE hotelid='$hotelid' and userid='$userid'";
				$this->db->query($query);
				if($this->db->affected_rows()){
					$this->session->set_flashdata('message','Record deleted !');
				}else{
					$this->session->set_flashdata('message','Record not found');
				}
				redirect(base_url() . 'index.php/Basic_Controller/user_hotel_view');
				//$data['pagename']="realestate_view.php";
			}
			$data['pagename']="hotel.php";
			$this->load->view('pages/profile/profile',$data);
		}
		public function user_hotel_view(){
			$data['pagename']="hotel_view.php";
			$this->load->view('pages/profile/profile',$data);
		}
		public function user_hotel_edit($hotelid){
			$userid = $_SESSION['userid'];
			$data['hotelid'] = $hotelid;
			$data['pagename']="edit_hotel.php";
			$this->load->view('pages/profile/profile',$data);
		}
		/* ************************************************************
		 * 					Travelling
		 *************************************************************/
		public function user_travelling($task='',$travelid=''){
			if($task=='create'){
				$userid=$_SESSION['userid'];
				$this->BasicModel->insert_user_travelling($travelid);
				$this->image_upload('travelling',$userid);
				$this->session->set_flashdata('message','Data Uploaded Successfully');
				redirect(base_url() . 'index.php/Basic_Controller/user_travelling_view');
			}
			if($task=='update'){
				$this->BasicModel->update_user_travelling($travelid);
				//$this->image_upload('real',$userid);
				$this->session->set_flashdata('message','Data Updated Successfully');
				//$data['pagename']="realestate_view.php";
				redirect(base_url() . 'index.php/Basic_Controller/user_travelling_view');
			}
			if($task=='delete'){
				$userid = $_SESSION['userid'];
				$delete_img ="select path from travelling_img where travelid=$travelid";
				$delete_res = $this->db->query($delete_img);
				foreach ($delete_res->result_array() as $val) {
					$path = $val['path'];
				}
				echo $path;
				unlink($path);
				$query = "DELETE FROM travelling WHERE travelid='$travelid' and userid='$userid'";
				$this->db->query($query);
				if($this->db->affected_rows()){
					$this->session->set_flashdata('message','Record deleted !');
				}else{
					$this->session->set_flashdata('message','Record not found');
				}
				redirect(base_url() . 'index.php/Basic_Controller/user_travelling_view');
				//$data['pagename']="realestate_view.php";
			}
			$data['pagename']="travelling.php";
			$this->load->view('pages/profile/profile',$data);
				
		}
		public function user_travelling_view(){
			$data['pagename']="travelling_view.php";
			$this->load->view('pages/profile/profile',$data);
		}
		public function user_travelling_edit($travelid){
			$userid = $_SESSION['userid'];
			$data['travelid'] = $travelid;
			$data['pagename']="edit_travelling.php";
			$this->load->view('pages/profile/profile',$data);
		}
		/* ************************************************************
		 * 					AUTOMOBILES
		 *************************************************************/
		public function user_automobile($task='',$autoid=''){
			if($task=='create'){
				$userid=$_SESSION['userid'];
				$this->BasicModel->insert_user_automobile($autoid);
				$this->image_upload('automobile',$userid);
				$this->session->set_flashdata('message','Data Uploaded Successfully');
				redirect(base_url() . 'index.php/Basic_Controller/user_automobile_view');
			}
			if($task=='update'){
				$this->BasicModel->update_user_automobile($autoid);
				//$this->image_upload('real',$userid);
				$this->session->set_flashdata('message','Data Updated Successfully');
				//$data['pagename']="realestate_view.php";
				redirect(base_url() . 'index.php/Basic_Controller/user_automobile_view');
			}
			if($task=='delete'){
				$userid = $_SESSION['userid'];
				$delete_img ="select path from automobile_img where autoid=$autoid";
				$delete_res = $this->db->query($delete_img);
				foreach ($delete_res->result_array() as $val) {
					$path = $val['path'];
				}
				echo $path;
				unlink($path);
				$query = "DELETE FROM automobile WHERE autoid='$autoid' and userid='$userid'";
				$this->db->query($query);
				if($this->db->affected_rows()){
					$this->session->set_flashdata('message','Record deleted !');
				}else{
					$this->session->set_flashdata('message','Record not found');
				}
				redirect(base_url() . 'index.php/Basic_Controller/user_automobile_view');
				//$data['pagename']="realestate_view.php";
			}
			$data['pagename']="automobile.php";
			$this->load->view('pages/profile/profile',$data);
		}
		public function user_automobile_view(){
			$data['pagename']="automobile_view.php";
			$this->load->view('pages/profile/profile',$data);
		}
		public function user_automobile_edit($autoid){
			$userid = $_SESSION['userid'];
			$data['autoid'] = $autoid;
			$data['pagename']="edit_automobile.php";
			$this->load->view('pages/profile/profile',$data);
		}
		
		/* ************************************************************
		 * 					OTHER
		 *************************************************************/
		public function user_other($task='',$otherid=''){
			if($task=='create'){
				$userid=$_SESSION['userid'];
				$this->BasicModel->insert_user_other($otherid);
				$this->image_upload('other',$userid);
				$this->session->set_flashdata('message','Data Uploaded Successfully');
				redirect(base_url() . 'index.php/Basic_Controller/user_other');
			}
			if($task=='update'){
				$this->BasicModel->update_user_other($otherid);
				//$this->image_upload('real',$userid);
				$this->session->set_flashdata('message','Data Updated Successfully');
				//$data['pagename']="realestate_view.php";
				redirect(base_url() . 'index.php/Basic_Controller/user_other_view');
			}
			if($task=='delete'){
				$userid = $_SESSION['userid'];
				$delete_img ="select path from other_img where otherid=$otherid";
				$delete_res = $this->db->query($delete_img);
				foreach ($delete_res->result_array() as $val) {
					$path = $val['path'];
				}
				echo $path;
				unlink($path);
				$query = "DELETE FROM other WHERE otherid='$otherid' and userid='$userid'";
				$this->db->query($query);
				if($this->db->affected_rows()){
					$this->session->set_flashdata('message','Record deleted !');
				}else{
					$this->session->set_flashdata('message','Record not found');
				}
				redirect(base_url() . 'index.php/Basic_Controller/user_other');
				//$data['pagename']="realestate_view.php";
			}
			$data['pagename']="other.php";
			$this->load->view('pages/profile/profile',$data);
				
		}
		public function user_other_view(){
			$data['pagename']="other_view.php";
			$this->load->view('pages/profile/profile',$data);
		}
		public function user_other_edit($otherid){
			$userid = $_SESSION['userid'];
			$data['otherid'] = $otherid;
			$data['pagename']="edit_other.php";
			$this->load->view('pages/profile/profile',$data);
		}
		/* ************************************************************
		 * 					PROFILE
		 *************************************************************/
		public function updateprofile(){
				$this->BasicModel->updateprofile();
				$this->session->set_flashdata('message','Data Updated Successfully');
				redirect(base_url().'index.php/Basic_Controller/user_profile');
		}
		public function realestate(){
			$category = "realestate";
			$this->load->view('pages/mainpage',$category);
		}
		/* ************************************************************
		 * 					IMAGE UPLOAD
		 *************************************************************/
		function image_upload($path,$userid)
		{
			
			//	CATEGORY WISE DATABASE TABLE AND TABLE-CONATAINTS
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
			}elseif ($path="freepost"){
				$category_data = array(
					'category_id' =>'freepost_id',
					'category_table'=>'freepost',	
					'category_img_table'=>'freepost_img'
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
						$image_path = $basepath."/".$userid."/".$config['file_name'];
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
						//print_r($error);die();
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
						//print_r($row);die();
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


		//user information

		public function userinformation()
		{

			$save=array(
				'name' => $this->input->post('name'),
				'emailid' => $this->input->post('emailid'),
				'phoneno' => $this->input->post('phoneno')
				 );
			$this->BasicModel->userinfo($save);

			redirect(' ','refresh');

		}


		/* ************************************************************
		 * 				FREE POST
		 *************************************************************/
		public function user_freepost($task='',$freepost_id=''){
			if($task=='create'){
				$userid=$_SESSION['userid'];
				$this->BasicModel->insert_user_freepost($freepost_id);
				$this->image_upload('freepost',$userid);
				$this->session->set_flashdata('message','Data Uploaded Successfully');
				redirect(base_url().'index.php/Basic_Controller/user_profile');
			}
		}
	}
?>