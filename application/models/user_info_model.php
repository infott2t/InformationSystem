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
		$temp_email = $this->input->post('email');
		
		$temp_pw =  $this->input->post('pw');
		$temp_pw = hash('sha512',md5($temp_pw));
		
		/*//MAX id
		$this->db->select_max('user_id');
		$this->db->from('user_info');
		$query = $this->db->get();
		$temp_maxid;
		foreach($query->result_array() as $row)
		{
			$temp_maxid=$row['user_id'];
		}*/
	 	$temp_emailcopy = $temp_email;
		$temp_md5key = rand(1,2147483647);
		$temp_md5key =$temp_md5key.$temp_emailcopy;
		$temp_md5key = hash('sha512',md5($temp_md5key));
		
			
			
		
		
		$data = array(
			'user_email' => $temp_email,
			'user_name' => $this->input->post('name'),
			'user_pw' => $temp_pw,
			'md5key' => $temp_md5key,
			'is_activation' => FALSE,
			'create_date' => $today
		);
	 
		
		$newdata = array(
			'username' =>  $this->input->post('name'),
			'useremail'=> $temp_email,
			'logged_in'=> FALSE
		);
		
		 
		$temp_pw1 = $this->input->post('pw');
		$temp_pw2 = $this->input->post('pw2');
		
		$this->db->where('is_activation',true);
		$this->db->where('user_email',$temp_email);
		$this->db->from('user_info');
		$query = $this->db->get();
		
		$temp_result="";
		
		if($query->num_rows()>0)
		{
		
		}else{
			if($temp_pw1 === $temp_pw2 ){

				$this->db->insert('user_info', $data);
				$temp_result="success";
				$this->session->set_userdata($newdata);	
			}
		}
		
	 
		return $temp_result;
	}
	
	public function reset_user_info()
	{
		$temp_result="";
		
		$this->load->helper('url');
		$temp_email = $this->session->userdata('useremail');
		$temp_pw = $this->input->post('pw');
		$temp_pw2 = $this->input->post('pw2');
		$temp_name = $this->input->post('name');
		
		if($temp_pw==$temp_pw2){
			
			$today = date("Ymd");
		 	$temp_pw = hash('sha512',md5($temp_pw));
		
	 		$temp_emailcopy = $temp_email;
			$temp_md5key = rand(1,2147483647);
			$temp_md5key =$temp_md5key.$temp_emailcopy;
			$temp_md5key = hash('sha512',md5($temp_md5key));
		
			$data = array(
				'user_email' => $temp_email,
				'user_name' => $temp_name,
				'user_pw' => $temp_pw,
				'md5key' => $temp_md5key,
				'is_activation' => TRUE,
				'create_date' => $today
			);
	 
		
		$newdata = array(
			'username' => $temp_name,
			'useremail'=> $temp_email,
			'logged_in'=> TRUE
		);
			
		$this->db->where('user_email',$temp_email);
		$query = $this->db->update('user_info', $data);
			$this->session->set_userdata($newdata);		
		$temp_result="success";	
		}else{
			$temp_result="false";
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
		
		$user_pw = hash('sha512',md5($user_pw));
		$user_newpw = hash('sha512',md5($user_newpw));
		
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
		$temp_pw = hash('sha512',md5($temp_pw));
		
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
				
				$temp_is_activation = $row->is_activation;
			}
			/*$newdata = array(
			'username' =>  $this->input->post('name'),
			'useremail'=> $temp_email,
			'logged_in'=> TRUE
			);*/
			if($temp_is_activation==TRUE){
				
				$this->session->set_userdata($newdata);
				$temp_result="success";
				
			}elseif($temp_is_activation==FALSE){
				$this->session->set_userdata('useremail',$temp_email);
				
				$temp_result="needActivation";
			}
			
			
			
		}else{
			
		}
		
		 
		return $temp_result;
	}
	public function get_user_info_activation()
	{  
		$temp_result;
		$this->load->helper('url');
		$temp_email = $this->session->userdata('useremail');
		 
		$this->db->where('user_email',$temp_email);
		$this->db->where('is_activation',true);
		$this->db->from('user_info');
		$query = $this->db->get();
	 
		if($query->num_rows()>0)
		{
			$temp_result="false";
		}else{
			$today = date("Ymd");
		
		 
		$temp_emailcopy = $temp_email;
		$temp_md5key = rand(1,2147483647);
		$temp_md5key =$temp_md5key.$temp_emailcopy;
		$temp_md5key = hash('sha512',md5($temp_md5key));
		
		$data = array(
			'user_email' => $temp_email,
			//'user_name' => $this->input->post('name'),
			//'user_pw' => $temp_pw,
			'md5key' => $temp_md5key,
			'is_activation' => FALSE,
			'create_date' => $today
		);	
			
		$this->db->insert('user_info', $data);
		if($this->db->affected_rows() > 0){
		 
		$temp_result="success";
		}else{
			$temp_result="fail";
		}
		
		if($temp_result=="success"){
			$this->db->where('user_email',$temp_email);
			$this->db->from('user_info');
			$query = $this->db->get();
			$temp_md5key;
			if($query->num_rows()>0){
			
				foreach ($query->result_array() as $row)
				{
					$temp_md5key = $row['md5key'];
				}
			}
			$temp_url = "http://www.jcoop.xyz/index.php/activation/getKey/".$temp_md5key;
			$temp_url2 = "http://www.jcoop.xyz/index.php/activation/delKey/".$temp_md5key;
			$this->load->library('email');

			$context= 'Thank you for regstering! Information Sytem For Work.';
			$this->email->from('WebAdimister@jcoop.xyz', 'HYEONIL CHOI');
			$this->email->to($temp_email);
			$this->email->subject($context);
			$this->email->message('<table id="__01" width="600" height="800" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td colspan="5">
			<img src="http://www.jcoop.xyz/infoimages/index_01.jpg" width="600" height="126" alt=""></td>
	</tr>
	<tr>
		<td colspan="5">
			<img src="http://www.jcoop.xyz/infoimages/index_02.jpg" width="600" height="22" alt=""></td>
	</tr>
	<tr>
		<td rowspan="5">
			<img src="http://www.jcoop.xyz/infoimages/index_03.jpg" width="40" height="445" alt=""></td>
		<td rowspan="5">
			<img src="http://www.jcoop.xyz/infoimages/index_04.jpg" width="24" height="445" alt=""></td>
		<td style="width:471px;height:99px;">
		<h1>Thank you for registration!</h1>
			 </td>
		<td rowspan="5">
			<img src="http://www.jcoop.xyz/infoimages/index_06.jpg" width="24" height="445" alt=""></td>
		<td rowspan="5">
			<img src="http://www.jcoop.xyz/infoimages/index_07.jpg" width="41" height="445" alt=""></td>
	</tr>
	<tr>
		<td style="width:471px;height:100px;">
			<p>This e-mail is, activating your email address.</p>
			<p>Link click, Activation on your e-mail. or No registring, deactivation on.</p>
			</td>
	</tr>
	<tr>
		<td style="width:471px;height:100px;">
		<p>On Web site, information system for work,</p>
			<p style="text-align:right;"><a href="'.$temp_url.'">Activation your e-mail</a></p>
			<br/>
			<p style="text-align:right;"><a href="'.$temp_url2.'">DeActivation your e-mail</a></p>
		</td>
	</tr>
	<tr>
		<td style="width:471px;height:100px;">
			<h3>Enjoy, Today. Thank you.</h3>
			<p>Wait, your response.</p>
			<p style="text-align: right;"><a href="http://www.jcoop.xyz">http://www.jcoop.xyz</a>, Web Admin,</p>
			<p style="text-align:right;"><a>capegon21@gmail.com</a> HYEONIL CHOI</p>
			 </td>
	</tr>
	<tr>
		<td>
			<img src="http://www.jcoop.xyz/infoimages/index_11.jpg" width="471" height="46" alt=""></td>
	</tr>
	<tr>
		<td colspan="5">
			<img src="http://www.jcoop.xyz/infoimages/index_12.jpg" width="600" height="23" alt=""></td>
	</tr>
	<tr>
		<td colspan="5">
			<img src="http://www.jcoop.xyz/infoimages/index_13.jpg" width="600" height="92" alt=""></td>
	</tr>
</table>');
		$val22=$this->email->send();
		//echo $this->email->print_debugger();
		$temp_result="success";
		}	 
			
		}
		return $temp_result;
	}
	
	public function set_user_info_delete_id()
	{
		
		$temp_sessionEmail = $this->session->userdata('useremail'); 
		$this->load->helper('url');
		$temp_delEmail = $this->input->post('delemail');
		$temp_delpw = $this->input->post('delpw');
		$temp_delpw = hash('sha512',md5($temp_delpw));
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
	
	public function chk_key_activation_on($value)
	{
	  
		$temp_result="";
		//$this->db->where('user_email',$temp_chkEmail);
		//$temp_key = hash('sha512',md5($temp_email));
	/*$query = $this->db->get();
		$temp_maxid;
		foreach($query->result_array() as $row)
		{
			$temp_maxid=$row['user_id'];
		}*/	 
		$this->db->where('md5key',$value);
		$this->db->from('user_info');
		$query=$this->db->get();
		$temp_useremail="";
		if($query->num_rows()>0){
			foreach($query->result_array() as $row)
			{
				$temp_useremail= $row['user_email'];
				$temp_username = $row['user_name'];
			}
			
			$session_data = array(
			'username' => $temp_username,
			'useremail'=> $temp_useremail,
			'logged_in'=> TRUE
			);
			$this->session->set_userdata($session_data);
			
			
			$temp_result="success0";
			
		}else{
			$temp_result="false";
		}
		
		if($temp_result=="success0"){
		$data = array(
			'is_activation' => TRUE
			);
		
			$this->db->where('user_email',$temp_useremail);
			$this->db->where('md5key',$value);
			$query = $this->db->update('user_info', $data);
			$temp_result="success";
		}
		return $temp_result;
	}
	
	public function chk_key_activation_delete_pw_chk()
	{
		$temp_result="";
		$temp_useremail = $this->session->userdata('useremail');
		$this->db->where('is_activation',0);
		$this->db->where('user_email',$temp_useremail);
		$query =  $this->db->delete('user_info');
		
		 
		$this->db->where('is_activation',1);
		$this->db->where('user_email',$temp_useremail);
		$query= $this->db->get('user_info');
		
		if($query->num_rows()>0){
				foreach($query->result_array() as $row)
			{
				$temp_pw = $row['user_pw'];
				if($temp_pw=="")
				{
				$temp_result="nullNeedinput";	
				}else{
					$temp_result="success";
				}
			}
		}
		return $temp_result;
	}
	
 
	
	public function chk_send_user_mail()
	{
		$temp_result="";
		
		$this->load->helper('url');
		$temp_chkEmail = $this->input->post('email');
		
		$this->db->where('user_email',$temp_chkEmail);
		$this->db->from('user_info');
		$query = $this->db->get();
		
		
		if($query->num_rows()>0){
			
			foreach ($query->result() as $row)
			{
				 
				$temp_userpw = $row->user_pw;
				  
			}
			
			$this->load->library('email');
			
			$context= 'To '.$temp_chkEmail.', Send to password, your email.';
			//$context = "=?UTF-8?B?".base64_encode($context)."?=";
			
			$this->email->from('WebAdimister@jcoop.xyz', 'HYEONIL CHOI');
			$this->email->to($temp_chkEmail);
			$this->email->subject($context);
			$this->email->message('<a>Hello.</a><br/><p>Forgot password,</p> <p>that :</p>');
		
			//$this->email->message('Password : '.);

			$val22=$this->email->send();
			echo $this->email->print_debugger();
			$temp_result="success";
			
		}else{
			$temp_result="email-error";
		}
		
		return $temp_result;
	}
	
	public function acti_send_user_mail()
	{
		$temp_result="";
		$this->load->helper('url');
		$temp_email = $this->input->post('email'); 
		$temp_pw = $this->input->post('pw');
		$temp_pw = hash('sha512',md5($temp_pw));
		
		$this->db->where('user_pw',$temp_pw);
		$this->db->where('user_email',$temp_email);
		$this->db->from('user_info');
		$query = $this->db->get();
		$temp_md5key;
		if($query->num_rows()>0){
			
			foreach ($query->result_array() as $row)
			{
				$temp_md5key = $row['md5key'];
			}
		}
		  
		 
		$temp_url = "http://www.jcoop.xyz/index.php/activation/getKey/".$temp_md5key;
		$temp_url2 = "http://www.jcoop.xyz/index.php/activation/delKey/".$temp_md5key;
		$this->load->library('email');
		
		$context= 'Thank you for regstering! Information Sytem For Work.';
		$this->email->from('WebAdimister@jcoop.xyz', 'HYEONIL CHOI');
		$this->email->to($temp_email);
		$this->email->subject($context);
		$this->email->message('<table id="__01" width="600" height="800" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td colspan="5">
			<img src="http://www.jcoop.xyz/infoimages/index_01.jpg" width="600" height="126" alt=""></td>
	</tr>
	<tr>
		<td colspan="5">
			<img src="http://www.jcoop.xyz/infoimages/index_02.jpg" width="600" height="22" alt=""></td>
	</tr>
	<tr>
		<td rowspan="5">
			<img src="http://www.jcoop.xyz/infoimages/index_03.jpg" width="40" height="445" alt=""></td>
		<td rowspan="5">
			<img src="http://www.jcoop.xyz/infoimages/index_04.jpg" width="24" height="445" alt=""></td>
		<td style="width:471px;height:99px;">
		<h1>Thank you for registration!</h1>
			 </td>
		<td rowspan="5">
			<img src="http://www.jcoop.xyz/infoimages/index_06.jpg" width="24" height="445" alt=""></td>
		<td rowspan="5">
			<img src="http://www.jcoop.xyz/infoimages/index_07.jpg" width="41" height="445" alt=""></td>
	</tr>
	<tr>
		<td style="width:471px;height:100px;">
			<p>This e-mail is, activating your email address.</p>
			<p>Link click, Activation on your e-mail. or No registring, deactivation on.</p>
			</td>
	</tr>
	<tr>
		<td style="width:471px;height:100px;">
		<p>On Web site, information system for work,</p>
			<p style="text-align:right;"><a href="'.$temp_url.'">Activation your e-mail</a></p>
			<br/>
			<p style="text-align:right;"><a href="'.$temp_url2.'">DeActivation your e-mail</a></p>
		</td>
	</tr>
	<tr>
		<td style="width:471px;height:100px;">
			<h3>Enjoy, Today. Thank you.</h3>
			<p>Wait, your response.</p>
			<p style="text-align: right;"><a href="http://www.jcoop.xyz">http://www.jcoop.xyz</a>, Web Admin,</p>
			<p style="text-align:right;"><a>capegon21@gmail.com</a> HYEONIL CHOI</p>
			 </td>
	</tr>
	<tr>
		<td>
			<img src="http://www.jcoop.xyz/infoimages/index_11.jpg" width="471" height="46" alt=""></td>
	</tr>
	<tr>
		<td colspan="5">
			<img src="http://www.jcoop.xyz/infoimages/index_12.jpg" width="600" height="23" alt=""></td>
	</tr>
	<tr>
		<td colspan="5" style="width:600px;height:92px;">
			<img src="http://www.jcoop.xyz/infoimages/index_13.jpg"  alt=""></td>
	</tr>
</table>');
 
		$val22=$this->email->send();
		//echo $this->email->print_debugger();
		$temp_result="success";
		
		
	}
	
	
}

