<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Planning extends CI_Controller {

	public function __construct()
    {
    	parent::__construct();
         $this->load->library('session');
    }
	
	public function index()
	{
		$this->load->view('planning/index');
	}
	 
	public function workplan(){
		/*//This code, database Connect.
		$this->load->model('work_plan_model');
		$data['work_plan'] = $this->work_plan_model->get_work_plan();
		$this->load->helper('url');
		$this->load->view('planning/workplan/index',$data); */
		
		$this->load->view('planning/workplan/index');
	} 
	public function studyplan(){
		$this->load->helper('url');
		$this->load->view('planning/studyplan/index');
	} 
}





















