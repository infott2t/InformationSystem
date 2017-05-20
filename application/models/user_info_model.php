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
	
	public function set_user_info_name()
	{
		$this->load->helper('url');
	 	
		$user_email = $this->session->userdata('useremail');
		$user_name = $this->session->userdata('username');
		$change_name = $this->input->post('changeName');
	 //$this->session->userdata('logged_in')
		
//update user_info set `user_name`='a', `user_email`='a@jcoop.xyz' where user_name='b' and user_email='b@jcoop.xyz';
		$data = array(
			'user_name' => $change_name
		);
		
		$session_data = array(
			'username' => $change_name,
			'useremail'=>$this->session->userdata('useremail'),
			'logged_in'=> TRUE
		);
		
		
		$this->db->where('user_email',$user_email);
		$this->db->where('user_name',$user_name);
		$query = $this->db->update('user_info', $data);
		//$query = $this->db->get();
		//echo $query;1
		$temp_result="";
		
		if($query >0)
		{
			$temp_result="success";
			$this->session->set_userdata($session_data);
	
		}else{
			
		}
		
		
		return $temp_result;
	}
	
	public function set_user_info_password()
	{
		$this->load->helper('url');
	 	
		$user_email = $this->session->userdata('useremail');
		$user_pw = $this->input->post('pw');
		$user_newpw =  $this->input->post('newpw');

		$this->db->where('user_email',$user_email);
		$this->db->where('user_pw',$user_pw);
		$this->db->from('user_info');
		$query = $this->db->get();
		
		$temp_result="";
		
		if($query->num_rows()>0)
		{
			$data = array(
			'user_pw' => $user_newpw
		);
		
		$this->db->where('user_email',$user_email);
		$query = $this->db->update('user_info', $data);
		//$query = $this->db->get();
		//echo $query;1
		$temp_result="";
		
			if($query >0)
			{
				$temp_result="success";
			

			}else{
				$temp_result="error-password";
			}
			
		
		}else{
			$temp_result="error-password";
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
	/////
	public function set_user_info_delete_id()
	{
		
		$temp_sessionEmail = $this->session->userdata('useremail'); 
		$this->load->helper('url');
		$temp_delEmail = $this->input->post('delemail');
		$temp_delpw = $this->input->post('delpw');
		$temp_result="";
		
		
		if($temp_delEmail!=$temp_sessionEmail){
			
			$temp_result= "error-deleteId";
			return $temp_result;
			
		}else{

			$this->db->where('user_email',$temp_sessionEmail);
			$this->db->where('user_pw',$temp_delpw);
			$this->db->from('user_info');
			$query = $this->db->get();
			if($query->num_rows()>0)
			{	
				//
				$this->db->where('user_email',$temp_sessionEmail);
				$this->db->where('user_pw',$temp_delpw);
				$query =  $this->db->delete('user_info');


				if($query > 0)
				{
					$temp_result="success";
				}else{
					$temp_result="error-deleteId";
				}
			}else{
				$temp_result="error-deleteId";
			}

			return $temp_result;
		
		}
		
		
	}
	
	
	
}
