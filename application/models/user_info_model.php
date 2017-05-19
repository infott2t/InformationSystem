<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_info_model extends CI_Model {
	
	public function __construct()
	{
		$this->load->database();
		$this->load->library('session');
	}
	 
	public function set_user_info()
	{
		$this->load->helper('url');
	 	$today = date("Ymd");
		
		$data = array(
			'user_email' => $this->input->post('email'),
			'user_name' => $this->input->post('name'),
			'user_pw' => $this->input->post('pw'),
			'create_date' => $today
		);
	 
		
		$newdata = array(
			'username' =>  $this->input->post('name'),
			'useremail'=> $this->input->post('email'),
			'logged_in'=> FALSE
		);
		
		$temp_email = $this->input->post('email');
		$temp_pw1 = $this->input->post('pw');
		$temp_pw2 = $this->input->post('pw2');
		
		
		$this->db->where('user_email',$temp_email);
		$this->db->from('user_info');
		$query = $this->db->get();
		
		$temp_result="";
		
		if($query->num_rows()>0)
		{
			
		}else{
			if($temp_pw1 == $temp_pw2 ){
			$this->db->insert('user_info', $data);
			$temp_result="success";
			$this->session->set_userdata($newdata);
			}
		}
		
		
		return $temp_result;
	}
	
	public function get_user_info()
	{
		$this->load->helper('url');
		$temp_email = $this->input->post('email');
		$temp_pw = $this->input->post('pw');
		
		$this->db->where('user_email',$temp_email);
		$this->db->where('user_pw',$temp_pw);
		$this->db->from('user_info');
		$query = $this->db->get();
		
		$temp_result="";
		
		if($query->num_rows()>0)
		{
			foreach ($query->result() as $row)
			{
				$newdata = array(
				'username' => $row->user_name,
				'useremail'=> $row->user_email,
				'logged_in'=> TRUE
				);
			}
			/*$newdata = array(
			'username' =>  $this->input->post('name'),
			'useremail'=> $temp_email,
			'logged_in'=> TRUE
			);*/
			
			$this->session->set_userdata($newdata);
			$temp_result="success";
		
			
		}else{
			
		}
		
		
		return $temp_result;
	}
	
}
