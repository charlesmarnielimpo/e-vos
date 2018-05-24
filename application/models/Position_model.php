<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Position_model extends CI_Model {
	
	public function addPosition($position){
		$this->db->insert('positions', $position);
	}

	public function showPosition()
	{
		$this->db->select('*');
		$this->db->from('positions');
		$query = $this->db->get();
		if ($query->num_rows()>0){
			return $query->result();
		}else{
			return $query->result();
		}
	}
}