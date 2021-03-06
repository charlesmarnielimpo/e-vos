<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Academic_calendar extends CI_Model {

	public function showAcademicCalendar()
	{
		$this->db->select('*');
		$this->db->from('academic_calendar');
		$query = $this->db->get();
		if($query->num_rows() > 0)
		{
			return $query->result();
		}else{
			return $query->result();
		}
	}

	public function saveAcademicCalendar($data)
	{
		$this->load->database();
		$count = $this->db->insert('academic_calendar',$data);
		if($count>0)
		{
			return true;
		}else{
			return false;
		}

	}
}
