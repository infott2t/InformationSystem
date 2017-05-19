<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Work_plan_model extends CI_Model {
	
	public function __construct()
	{
		$this->load->database();
	}
	
	public function get_work_plan($WORK_DATE = FALSE)
	{
		if($WORK_DATE === FALSE)
		{
		$query = $this->db->get('WORK_PLAN');
		return $query->result_array();
		}
		 
		$query = $this->db->get_where('WORK_PLAN',array('WORK_DATE'=>$WORK_DATE));
	}
}
