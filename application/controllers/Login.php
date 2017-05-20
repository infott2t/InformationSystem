<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
    {
    	parent::__construct();
        $this->load->library('session');
    }
	
	public function index()
	{
	    $this->session->userdata();
	
		$session_str = $this->session->userdata('useremail');
		
		if($this->session->userdata('logged_in') === TRUE)
		{
			$this->load->helper('form');
			$this->load->view('login/signed');
		}
		else
		{
			$this->load->helper('form');
			$this->load->view('login/index');
		}
	}
	
	public function signin()
	{	
		$this->load->helper('form');
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('email', 'email', 'required');
		$this->form_validation->set_rules('pw', 'password', 'required');
	
		$this->load->model('user_info_model');
		$result_temp=$this->user_info_model->get_user_info();
		
		if($result_temp=="success"){
			$data['change'] = "none";
			$data['status'] = "none";
			$this->load->view('login/signed',$data);
		}else{
			$this->load->view('login/retry');
		} 
		 
	}
	public function signout()
	{
		unset(
        $_SESSION['username'],
        $_SESSION['useremail'],
		$_SESSION['logged_in']
		);
		$this->load->helper('url');
		$data['change'] = "none";
		$data['status'] = "none";
		
		$this->load->view('login/signed',$data); 
	}
	
	public function retry()
	{
		$this->load->view('login/retry');
	}
	
	public function change($value)
	{
		$this->load->helper('form');
		$this->load->library('form_validation');
		
		$result_temp="";
		
		if($value=="name")
		{
			$this->load->model('user_info_model');
			$result_temp=$this->user_info_model->set_user_info_name();
			
			if($result_temp=="success"){
				 
			$data['change'] = "name";
			$data['status'] = "normal";
			//$this->load->view('login/signed',$data);
			}
			$this->load->view('login/signed',$data);
			
		}
		if($value=="password")
		{
			$this->load->model('user_info_model');
			$result_temp=$this->user_info_model->set_user_info_password();
			 
			if($result_temp=="success"){
				$data['change'] = "password";
				$data['status'] = "success";
				$this->load->view('login/signed',$data);
			}
			if($result_temp=="error-password"){
				$data['change'] = "password";
				$data['status'] = "error-password";
				$this->load->view('login/signed',$data);
			}
		}
		if($value=="delete")
		{
			$this->load->model('user_info_model');
			$result_temp=$this->user_info_model->set_user_info_delete_id();
			
			if($result_temp=="success"){
				$data['change'] = "deleteId";
				$data['status'] = "success";
				
				unset(
        		$_SESSION['username'],
        		$_SESSION['useremail'],
				$_SESSION['logged_in']
				);
				
				$this->load->view('login/deleted',$data);
			}
			if($result_temp=="error-deleteId"){
				$data['change'] = "deleteId";
				$data['status'] = "error-deleteId";
				$this->load->view('login/signed',$data);
			}
		}
	}
	 
	
}