<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	class Admin extends CI_Controller{
		public function index(){
			if(isset($_SESSION['adminid'])){
				$this->load->view('admin/Layout/index.php');
			}else{
				redirect(base_url().'index.php/Admin/Login');
			}	
		}
		// Login Display page
		public function Login(){
			$this->load->view('admin/Layout/Login');
		}
		public function Allusers(){
			$data['pagename']="allusers.php";
			$this->load->view('admin/pages/director',$data);
		}
		// Login credential checking 
		public function loginCheck(){
			$data['email']=$this->input->post('email');
			$data['password']=sha1($this->input->post('password'));
			$this->load->model('AdminModel');
			$this->AdminModel->validate_signin($data);
		}
		// Logout user
		public function Logout(){
			unset($_SESSION['adminid']);
			$this->session->set_flashdata('message','Successfully logout');
			redirect(base_url().'index.php/Admin/Login');
		}
		//Promotions (Most populars of site)
		public function Pramotions(){
			if(isset($_SESSION['adminid'])){
				$post_id = $this->input->post("post_id");
				$sub_days = $this->input->post("sub_days"); //Subscrioption days
				$price = $this->input->post("price");
				$category = $this->input->post("category");
				
				date_default_timezone_set("Asia/Kolkata");
				$time = date("Y-m-d");
				
				$time_left = date('Y-m-d', strtotime("+$sub_days days"));
				$data = array(
						'post_id' => $post_id,
						'sub_days' => $sub_days,
						'price' => $price,
						'category' => $category,
						'dateadded' => $time,
						'daysleft' => $time_left
						
				);
					$this->db->insert('pramotion',$data);
					redirect(base_url().'index.php/Admin');
				}else{
					redirect(base_url().'index.php/Admin/login');
				}
		}
		public function DeletePramotions($postid){
			if(isset($_SESSION['adminid'])){
				$query = "delete from pramotion where post_id = $postid";
				$this->db->query($query);
				redirect(base_url().'index.php/Admin');
			}else{
				redirect(base_url().'index.php/Admin/login');
			}
		}
		/* ************************************************************************************
		 * 
		 * 					Image UPDATE / DELETE /ADD
		 * 
		 *************************************************************************************/
		
		public function UpdateImage($path){
			if(isset($_SESSION['adminid'])){
				$data['userid'] = $_SESSION['adminid'];
				$data['imgid'] = $this->input->post('imgid');
				$postid = $this->input->post('postid');
				$this->AdminModel->image_update($path,$data);
				$this->session->set_flashdata('message','Image Updated Successfully');
				/*
				 *
				 * 	PAGENAME SELECTION [ Add new category if any in elseif ] >>>
				 *
				 */
				if($path=="real"){
					$page_name = "realestate_edit";
				}elseif ($path=="tution"){
					$page_name = "tution_edit";
				}elseif ($path=="hotel"){
					$page_name = "hotel_edit";
				}elseif ($path=="travelling"){
					$page_name = "travelling_edit";
				}elseif ($path=="automobile"){
					$page_name = "automobile_edit";
				}elseif ($path="other"){
					$page_name = "other_edit";
				}
				redirect(base_url() . 'index.php/Admin/'.$page_name.'/'.$postid);
			}else{
				redirect(base_url().'index.php/Admin/login');
			}	
		}
		public function DeleteImage($path,$id,$realid){
			if(isset($_SESSION['adminid'])){
			/*
			 *
			 * 	PAGENAME SELECTION + Image database selection[ Add new category if any in elseif ] >>>
			 *
			 */
			if($path=="real"){
				$page_name = "realestate_edit";
				$image_table = "real_img";
			}elseif ($path=="tution"){
				$page_name = "tution_edit";
				$image_table = "tut_img";
			}elseif ($path=="hotel"){
				$page_name = "hotel_edit";
				$image_table = "hotel_img";
			}elseif ($path=="travelling"){
				$page_name = "travelling_edit";
				$image_table = "travelling_img";
			}elseif ($path=="automobile"){
				$page_name = "automobile_edit";
				$image_table = "automobile_img";
			}elseif ($path="other"){
				$page_name = "other_edit";
				$image_table = "other_img";
			}
			$result = $this->db->query("select path from $image_table where id=$id");
			$row = $result->row();
			$filename = $row->path;
			
			unlink($filename);
			$this->db->query("delete from $image_table where id=$id");
			
			$this->session->set_flashdata('message','Image Deleted');
			redirect(base_url() . 'index.php/Admin/'.$page_name.'/'.$realid);// DOnt change realid
			}else{
				redirect(base_url().'index.php/Admin/login');
			}
		}
		public function AddMoreImages(){
			if(isset($_SESSION['adminid'])){
				$realid = $this->input->post('realid');
				$category = $this->input->post('category');
				$file = $_FILES['image']['tmp_name'];
				$this->AdminModel->image_upload_new($category,$realid);
				if($category=="real"){
					redirect(base_url().'index.php/Admin/realestate_edit/'.$realid);
				}elseif ($category=="tution"){
					redirect(base_url().'index.php/Admin/tution_edit/'.$realid);// DONT change this to > tutid <
				}elseif ($category=="hotel"){
					redirect(base_url().'index.php/Admin/hotel_edit/'.$realid);// DONT change this to > hotelid <
				}elseif($category=="travelling"){
					redirect(base_url().'index.php/Admin/travelling_edit/'.$realid);// same for all category
				}elseif($category=="automobile"){
					redirect(base_url().'index.php/Admin/automobile_edit/'.$realid);
				}elseif($category=="other"){
					redirect(base_url().'index.php/Admin/other_edit/'.$realid);
				}
			}else{
				redirect(base_url().'index.php/Admin/login');
			}
		}
		/* ************************************************************
		 * 					REALESTATE
		 *************************************************************/
		public function realestate($task='',$realid='',$userid=''){
			if(isset($_SESSION['adminid'])){
			if($task=='create'){
				$userid=$_SESSION['adminid'];
				$this->load->model('AdminModel');
				$this->AdminModel->insert_user_realestate();
				$this->AdminModel->image_upload('real',$userid);
				$this->session->set_flashdata('message','Data Uploaded Successfully');
				redirect(base_url() . 'index.php/Admin/realestate');
			}
			if($task=='update'){
				$this->load->model('AdminModel');
				$this->AdminModel->update_user_realestate($realid);
				//$this->image_upload('real',$userid);
				$this->session->set_flashdata('message','Data Updated Successfully');
				//$data['pagename']="realestate_view.php";
				redirect(base_url() . 'index.php/Admin/realestate_view');
			}
			if($task=='delete'){
				if(isset($_SESSION['adminid'])){
					$query = "DELETE FROM realestate WHERE realid='$realid' and userid='$userid'";
					$this->db->query($query);
					if($this->db->affected_rows()){
						$this->session->set_flashdata('message','Record deleted !');
					}else{
						$this->session->set_flashdata('message','Record not found');
					}
					redirect(base_url() . 'index.php/Admin/realestate_view');
					//$data['pagename']="realestate_view.php";
				}else{
					redirect(base_url().'index.php/Admin/login');
				}
			}
			$data['pagename']="realestate.php";
			$this->load->view('admin/pages/director',$data);
			}else{
				redirect(base_url().'index.php/Admin/login');
			}
		}
		public function realestate_view(){
			if(isset($_SESSION['adminid'])){
				$data['pagename']="realestate_view.php";
				$this->load->view('admin/pages/director',$data);
			}else{
				redirect(base_url().'index.php/Admin/login');
			}
		}
		public function realestate_edit($realid){
			if(isset($_SESSION['adminid'])){
				$userid = $_SESSION['adminid'];
				$data['realid'] = $realid;
				$data['pagename']="realestate_edit.php";
				$this->load->view('admin/pages/director',$data);
			}else{
				redirect(base_url().'index.php/Admin/login');
			}	
		}
		/* ************************************************************
		 * 					TUTION
		 *************************************************************/
		public function tution($task='',$realid='',$userid=''){
			if(isset($_SESSION['adminid'])){
				if($task=='create'){
					$userid=$_SESSION['adminid'];
					$this->load->model('AdminModel');
					$this->AdminModel->insert_user_tution();
					$this->AdminModel->image_upload('tution',$userid);
					$this->session->set_flashdata('message','Data Uploaded Successfully');
					redirect(base_url() . 'index.php/Admin/tution');
				}
				if($task=='update'){
					$this->load->model('AdminModel');
					$this->AdminModel->update_user_tution($realid);
					//$this->image_upload('real',$userid);
					$this->session->set_flashdata('message','Data Updated Successfully');
					//$data['pagename']="realestate_view.php";
					redirect(base_url() . 'index.php/Admin/tution_view');
				}
				if($task=='delete'){
					if(isset($_SESSION['adminid'])){
						$query = "DELETE FROM tution WHERE tutid='$realid' and userid='$userid'";
						$this->db->query($query);
						if($this->db->affected_rows()){
							$this->session->set_flashdata('message','Record deleted !');
						}else{
							$this->session->set_flashdata('message','Record not found');
						}
						redirect(base_url() . 'index.php/Admin/tution_view');
						//$data['pagename']="realestate_view.php";
					}else{
						redirect(base_url().'index.php/Admin/login');
					}
				}
				$data['pagename']="tution.php";
				$this->load->view('admin/pages/director',$data);
			}else{
				redirect(base_url().'index.php/Admin/login');
			}
		}
		public function tution_view(){
			if(isset($_SESSION['adminid'])){
				$data['pagename']="tution_view.php";
				$this->load->view('admin/pages/director',$data);
			}else{
				redirect(base_url().'index.php/Admin/login');
			}
		}
		public function tution_edit($realid){ // dont change realid 
			if(isset($_SESSION['adminid'])){
				$userid = $_SESSION['adminid'];
				$data['realid'] = $realid;
				$data['pagename']="tution_edit.php";
				$this->load->view('admin/pages/director',$data);
			}else{
				redirect(base_url().'index.php/Admin/login');
			}
		}
		/* ************************************************************
		 * 					HOTEL
		 *************************************************************/
		public function hotel($task='',$realid='',$userid=''){
			if(isset($_SESSION['adminid'])){
				if($task=='create'){
					$userid=$_SESSION['adminid'];
					$this->load->model('AdminModel');
					$this->AdminModel->insert_user_hotel();
					$this->AdminModel->image_upload('hotel',$userid);
					$this->session->set_flashdata('message','Data Uploaded Successfully');
					redirect(base_url() . 'index.php/Admin/hotel');
				}
				if($task=='update'){
					$this->load->model('AdminModel');
					$this->AdminModel->update_user_hotel($realid);
					//$this->image_upload('real',$userid);
					$this->session->set_flashdata('message','Data Updated Successfully');
					//$data['pagename']="realestate_view.php";
					redirect(base_url() . 'index.php/Admin/hotel_view');
				}
				if($task=='delete'){
					if(isset($_SESSION['adminid'])){
						$query = "DELETE FROM hotel WHERE hotelid='$realid' and userid='$userid'";
						$this->db->query($query);
						if($this->db->affected_rows()){
							$this->session->set_flashdata('message','Record deleted !');
						}else{
							$this->session->set_flashdata('message','Record not found');
						}
						redirect(base_url() . 'index.php/Admin/hotel_view');
						//$data['pagename']="realestate_view.php";
					}else{
						redirect(base_url().'index.php/Admin/login');
					}
				}
				$data['pagename']="hotel.php";
				$this->load->view('admin/pages/director',$data);
			}else{
				redirect(base_url().'index.php/Admin/login');
			}
		}
		public function hotel_view(){
			if(isset($_SESSION['adminid'])){
				$data['pagename']="hotel_view.php";
				$this->load->view('admin/pages/director',$data);
			}else{
				redirect(base_url().'index.php/Admin/login');
			}
		}
		public function hotel_edit($realid){
			if(isset($_SESSION['adminid'])){
				$userid = $_SESSION['adminid'];
				$data['realid'] = $realid;
				$data['pagename']="hotel_edit.php";
				$this->load->view('admin/pages/director',$data);
			}else{
				redirect(base_url().'index.php/Admin/login');
			}
		}
		/* ************************************************************
		 * 					TRAVELLING
		 *************************************************************/
		public function travelling($task='',$realid='',$userid=''){
			if(isset($_SESSION['adminid'])){
				if($task=='create'){
					$userid=$_SESSION['adminid'];
					$this->load->model('AdminModel');
					$this->AdminModel->insert_user_travelling();
					$this->AdminModel->image_upload('travelling',$userid);
					$this->session->set_flashdata('message','Data Uploaded Successfully');
					redirect(base_url() . 'index.php/Admin/travelling');
				}
				if($task=='update'){
					$this->load->model('AdminModel');
					$this->AdminModel->update_user_travelling($realid);
					//$this->image_upload('real',$userid);
					$this->session->set_flashdata('message','Data Updated Successfully');
					//$data['pagename']="realestate_view.php";
					redirect(base_url() . 'index.php/Admin/travelling_view');
				}
				if($task=='delete'){
					if(isset($_SESSION['adminid'])){
						$query = "DELETE FROM travelling WHERE travelid='$realid' and userid='$userid'";
						$this->db->query($query);
						if($this->db->affected_rows()){
							$this->session->set_flashdata('message','Record deleted !');
						}else{
							$this->session->set_flashdata('message','Record not found');
						}
						redirect(base_url() . 'index.php/Admin/travelling_view');
						//$data['pagename']="realestate_view.php";
					}else{
						redirect(base_url().'index.php/Admin/login');
					}
				}
				$data['pagename']="travelling.php";
				$this->load->view('admin/pages/director',$data);
			}else{
				redirect(base_url().'index.php/Admin/login');
			}
		}
		public function travelling_view(){
			if(isset($_SESSION['adminid'])){
				$data['pagename']="travelling_view.php";
				$this->load->view('admin/pages/director',$data);
			}else{
				redirect(base_url().'index.php/Admin/login');
			}
		}
		public function travelling_edit($realid){
			if(isset($_SESSION['adminid'])){
				$userid = $_SESSION['adminid'];
				$data['realid'] = $realid;
				$data['pagename']="travelling_edit.php";
				$this->load->view('admin/pages/director',$data);
			}else{
				redirect(base_url().'index.php/Admin/login');
			}
		}
		/* ************************************************************
		 * 					AUTOMOBILE
		 *************************************************************/
		public function automobile($task='',$realid='',$userid=''){
			if(isset($_SESSION['adminid'])){
				if($task=='create'){
					$userid=$_SESSION['adminid'];
					$this->load->model('AdminModel');
					$this->AdminModel->insert_user_automobile();
					$this->AdminModel->image_upload('automobile',$userid);
					$this->session->set_flashdata('message','Data Uploaded Successfully');
					redirect(base_url() . 'index.php/Admin/automobile');
				}
				if($task=='update'){
					$this->load->model('AdminModel');
					$this->AdminModel->update_user_automobile($realid);
					//$this->image_upload('real',$userid);
					$this->session->set_flashdata('message','Data Updated Successfully');
					//$data['pagename']="realestate_view.php";
					redirect(base_url() . 'index.php/Admin/automobile_view');
				}
				if($task=='delete'){
					if(isset($_SESSION['adminid'])){
						$query = "DELETE FROM automobile WHERE autoid='$realid' and userid='$userid'";
						$this->db->query($query);
						if($this->db->affected_rows()){
							$this->session->set_flashdata('message','Record deleted !');
						}else{
							$this->session->set_flashdata('message','Record not found');
						}
						redirect(base_url() . 'index.php/Admin/automobile_view');
						//$data['pagename']="realestate_view.php";
					}else{
						redirect(base_url().'index.php/Admin/login');
					}
				}
				$data['pagename']="automobile.php";
				$this->load->view('admin/pages/director',$data);
			}else{
				redirect(base_url().'index.php/Admin/login');
			}
		}
		public function automobile_view(){
			if(isset($_SESSION['adminid'])){
				$data['pagename']="automobile_view.php";
				$this->load->view('admin/pages/director',$data);
			}else{
				redirect(base_url().'index.php/Admin/login');
			}
		}
		public function automobile_edit($realid){
			if(isset($_SESSION['adminid'])){
				$userid = $_SESSION['adminid'];
				$data['realid'] = $realid;
				$data['pagename']="automobile_edit.php";
				$this->load->view('admin/pages/director',$data);
			}else{
				redirect(base_url().'index.php/Admin/login');
			}
		}
		/* ************************************************************
		 * 					OTHER
		 *************************************************************/
		public function other($task='',$realid='',$userid=''){
			if(isset($_SESSION['adminid'])){
				if($task=='create'){
					$userid=$_SESSION['adminid'];
					$this->load->model('AdminModel');
					$this->AdminModel->insert_user_other();
					$this->AdminModel->image_upload('other',$userid);
					$this->session->set_flashdata('message','Data Uploaded Successfully');
					redirect(base_url() . 'index.php/Admin/other');
				}
				if($task=='update'){
					$this->load->model('AdminModel');
					$this->AdminModel->update_user_other($realid);
					//$this->image_upload('real',$userid);
					$this->session->set_flashdata('message','Data Updated Successfully');
					//$data['pagename']="realestate_view.php";
					redirect(base_url() . 'index.php/Admin/other_view');
				}
				if($task=='delete'){
					if(isset($_SESSION['adminid'])){
						$query = "DELETE FROM other WHERE otherid='$realid' and userid='$userid'";
						$this->db->query($query);
						if($this->db->affected_rows()){
							$this->session->set_flashdata('message','Record deleted !');
						}else{
							$this->session->set_flashdata('message','Record not found');
						}
						redirect(base_url() . 'index.php/Admin/other_view');
						//$data['pagename']="realestate_view.php";
					}else{
						redirect(base_url().'index.php/Admin/login');
					}
				}
				$data['pagename']="other.php";
				$this->load->view('admin/pages/director',$data);
			}else{
				redirect(base_url().'index.php/Admin/login');
			}
		}
		public function other_view(){
			if(isset($_SESSION['adminid'])){
				$data['pagename']="other_view.php";
				$this->load->view('admin/pages/director',$data);
			}else{
				redirect(base_url().'index.php/Admin/login');
			}
		}
		public function other_edit($realid){
			if(isset($_SESSION['adminid'])){
				$userid = $_SESSION['adminid'];
				$data['realid'] = $realid;
				$data['pagename']="other_edit.php";
				$this->load->view('admin/pages/director',$data);
			}else{
				redirect(base_url().'index.php/Admin/login');
			}
		}
		public function Feedback_view(){
			if(isset($_SESSION['adminid'])){
				$data['feedback'] = $this->db->get('feedback')->result_array();
				$data['pagename']="Feedback_view.php";
				$this->load->view('admin/pages/director',$data);
			}else{
				redirect(base_url().'index.php/Admin/login');
			}
		}
	}//EOF Admin
