<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function __construct()
    {
    	parent::__construct();
       
    }
	
	public function index()
	{
		$this->load->helper('form');
		$this->load->view('register/index');
	}
	
	public function create()
	{
		$this->load->helper('form');
		$this->load->library('form_validation');

		

		$this->form_validation->set_rules('name', 'name', 'required');
		$this->form_validation->set_rules('pw', 'password', 'required');
		$this->form_validation->set_rules('email', 'email', 'required');

		if ($this->form_validation->run() === FALSE)
		{
		
			$this->load->view('register/index');
			

		}
		else
		{
			$this->load->model('user_info_model');
			$result_temp=$this->user_info_model->set_user_info();
			if($result_temp=="success"){
				
				$this->load->model('user_info_model');
				$result_temp=$this->user_info_model->acti_send_user_mail();
				
				$this->load->view('register/registred');
			}else{
				$this->load->view('register/retry');
			} 
			
		}
	}
	
	public function registred()
	{
		
		$this->load->helper('url');
		
		$this->load->view('register/registred');
	}
}