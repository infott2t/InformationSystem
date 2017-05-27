<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Activation extends CI_Controller {

	public function __construct()
    {
    	parent::__construct();
        $this->load->library('session');
    }

	public function index($value){
		
		$data['status']="normal"; 
		$this->load->view('activation/index',$data); 
	}
	
	public function form_input(){
		$this->load->helper('form');
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('pw', 'Password', 'required');
		$this->form_validation->set_rules('pw2', 'Repeat password', 'required');
		$this->form_validation->set_rules('name', 'Name', 'required');
		
		
		if ($this->form_validation->run() === FALSE)
		{
			$data['status']="normal";
			$this->load->view('activation/form',$data);
			
		}else{
			
			$this->load->model('user_info_model');
			$result_temp=$this->user_info_model->reset_user_info();
			
			if($result_temp=="false"){
				$data['status']="Input password different, each other.";
				$this->load->view('activation/form',$data);
			}
			if($result_temp=="success"){
				$data['result']="Activation complete."; 
				$this->load->view('activation/index',$data);
			}
		}
	}
	 
	public function getKey($value){
		//echo $value;
	 
		$data['activationKey'] = $value;
		$this->load->model('user_info_model');
		$result_temp=$this->user_info_model->chk_key_activation_on($value);
		if($result_temp=="success"){
			$result_temp=$this->user_info_model->chk_key_activation_delete_pw_chk();
			 
			if($result_temp=="success"){
			$data['result']="Activation Complete.";
			$this->load->view('activation/index',$data); 
			}else{
			$data['result']="Activation Complete.";
			$data['status']="normal";
			$this->load->view('activation/form',$data);	
			}
		}else{
			$data['result']="Activating in, or It's a before key. No handling. Now a time. Thank you.";
		$this->load->view('activation/index',$data); 	 
		}
	}
 
	public function delKey($value){
		
		$data['activationKey'] = $value;
		$this->load->model('user_info_model');
		$result_temp=$this->user_info_model->chk_key_activation_off($value);
		if($result_temp=="success"){
			$data['result']="Deleting ID, Deactivation Complete.";
			$this->load->view('activation/off',$data); 	 
		}else if($result_temp=="false"){
			$data['result']="It's a before key. No handling. Now a time. Thank you.";
			$this->load->view('activation/off',$data); 	
		}
	}
	
	public function resetKey($value){
		
		$data['activationKey'] = $value;
		$this->load->model('user_info_model');
		$result_temp = $this->user_info_model->chk_reset_key($value);
		
		if($result_temp=="success"){
			$this->load->helper('form');
			$this->load->view('activation/resetting');	
			
		}else if($result_temp=="false"){
			$data['result']="It's a before key. No handling. Now a time. Thank you.";
			$this->load->view('activation/off',$data); 	
		}else{
			$data['result']="It's a before key. No handling. Now a time. Thank you.";
			$this->load->view('activation/off',$data); 
		}
		
	}
	
	public function resetting(){
		$this->load->helper('form');
		
		$this->load->model('user_info_model');
		$result_temp = $this->user_info_model->reset_password();
		if($result_temp=="success"){
			$data['result']="Password reset, Complete.";
			$this->load->view('activation/off',$data); 
		}else if($result_temp=="fail"){
			$data['result']="SERVER ERROR. Retry Please or Contact Admin. Thank you.";
			$this->load->view('activation/off',$data); 
		}else{
			
		}
		
	}
	 
}