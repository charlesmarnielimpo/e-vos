<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Positions_model extends CI_Model {

	public function __construct(){
		$this->load->database();
	}

	public function create($position){
		$this->db->insert('positions', $position);
	}

	public function read()
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