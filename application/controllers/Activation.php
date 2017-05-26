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
		$this->load->helper('form'); 
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
			$data['result']="Activation Fail.";
		$this->load->view('activation/index',$data); 	 
		}
	}
 
	 
}