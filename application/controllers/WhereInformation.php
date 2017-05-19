<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Whereinformation extends CI_Controller{
	
	public function index()
	{
		$this->load->view('whereinformation/index');
	}
}
