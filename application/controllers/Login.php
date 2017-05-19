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
			$this->load->view('login/signed');
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
		redirect('login/signed'); 
	}
	
	public function retry()
	{
		$this->load->view('login/retry');
	}
	
	public function signed()
	{
		 
		$this->load->helper('url');
		
		$this->load->view('login/signed');
	}
	
}