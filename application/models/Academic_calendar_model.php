<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Academic_calendar_model extends CI_Model {

	public function __construct(){
		$this->load->database();
	}

	public function create($data)
	{
		$this->db->insert('academic_calendar', $data);
	}

	public function read()
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

	public function update($id,$data){
		$this->db->where('id', $id);
		$this->db->update('academic_calendar', $data);
	}

	public function delete($id){
		$this->db->where('id', $id);
		$this->db->delete('academic_calendar');
	}
}
