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
			$this->load->library('form_validation');
			$this->load->view('login/signed');
		}
		else
		{
			$this->load->helper('form');
			$this->load->library('form_validation');
			$this->load->view('login/index');
		}
	}
	
	public function signin()
	{	
		$this->load->helper('form');
		$this->load->library('form_validation');
		$config = array(array('field'=>'email','label'=>'email','rules'=>'required'));
		$this->form_validation->set_rules('email', 'email', 'required');
		$this->form_validation->set_rules('pw', 'password', 'required');
		
		 
		
		if ($this->form_validation->run() === FALSE)
		{
		
			/*$this->load->helper('form');
			$this->load->library('form_validation');*/
			$this->load->view('login/index');
			

		}
		else
		{
			$this->load->model('user_info_model');
			$result_temp=$this->user_info_model->get_user_info();

			if($result_temp=="success"){
				
				$data['change'] = "none";
				$data['status'] = "none";
				$this->load->view('login/signed',$data);
				
			}elseif($result_temp=="needActivation"){
				
				 
				$data['change'] = "needActivation";
				$data['status'] = "none";
				
				$this->load->view('login/needActivation');
			}else{
				$data['change'] = "none";
				$data['status'] = "none";
				$this->load->view('login/retry',$data);
			} 
			
		}
		
		 
	}
	/*public function signed()
	{
		$this->load->helper('form');
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('changeName', 'Name', 'required');
		//$this->form_validation->set_rules('pw', 'password', 'required');
	}*/
	public function activation()
	{
		 
			$this->load->helper('form');
			$this->load->model('user_info_model');
			$result_temp=$this->user_info_model->get_user_info_activation();
		 
			 
		if($result_temp=="success"){
			 
			$this->load->view('login/activated');
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
	
	public function forget($var1)
	{
		 
		$this->load->helper('form');
		$this->load->library('form_validation');
		
		$result_temp="";
		
		if($var1=="form"){
		$data['change'] = "init";
		$data['status'] = "normal";
		$this->load->view('login/forget',$data);
		}
		
		if($var1=="sending"){
		$this->load->helper('form');
		$this->load->library('form_validation');
			
		$data['change'] = "sending";
		$data['status'] = "normal";
		
		$this->load->model('user_info_model');
		$result_temp=$this->user_info_model->chk_send_user_mail();

			if($result_temp=="success"){
			$data['status'] = "success"; 
			$this->load->view('login/forget',$data);	
			}
			if($result_temp=="email-error"){
			$data['status'] = "email-error"; 	
			$this->load->view('login/forget',$data);	
			}
		}
	}
	
	public function retry()
	{
		$this->load->view('login/retry');
	}
	
	public function change($value)
	{
		
		
		$result_temp="";
		
		if($value=="name")
		{
			$this->load->helper('form');
			$this->load->library('form_validation');
			$this->form_validation->set_rules('changeName', 'changeName', 'required');
			
			if ($this->form_validation->run() === FALSE)
			{
				
			$data['change'] = "name";
			$data['status'] = "normal";
			$this->load->view('login/signed',$data);
			

			}else{
			$this->load->model('user_info_model');
			$result_temp=$this->user_info_model->set_user_info_name();
			
			if($result_temp=="success"){
				 
			$data['change'] = "name";
			$data['status'] = "normal";
			//$this->load->view('login/signed',$data);
			}
			$this->load->view('login/signed',$data);
			}
			
			
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