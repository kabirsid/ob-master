<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Info extends CI_Controller {
	public function index()
	{
		//$this->load->view('info/Director'	);
	}
	public function howWeWork(){
		$data['pagename'] = "Work.php";
		$this->load->view('info/Director',$data);
	}
	public function feedback(){
		$data['pagename'] = "Feedback.php";
		$this->load->view('info/Director',$data);
	}
	public function contact(){
		$data['pagename'] = "Contact.php";
		$this->load->view('info/Director',$data);
	}
	public function terms(){
		$data['pagename'] = "Terms.php";
		$this->load->view('info/Director',$data);
	}
	public function sendfeed(){
		$data['email']=$this->input->post('email');
		$data['message']=$this->input->post('query');

		// print_r($data);die();
		$this->db->insert('feedback',$data);
		$this->session->set_flashdata('message','Feedback sent Successfully');
		redirect(base_url().'index.php/info/feedback');
	}
}
