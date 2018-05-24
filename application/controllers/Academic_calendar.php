<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Academic_calendar extends CI_Controller {



	public function index()
	{
		$this->load->model('Academic_calendar_model');
		$data['academic_calendar'] = $this->Academic_calendar_model->showAcademicCalendar();
		$this->load->view('partials/_header');
		$this->load->view('partials/_topbar');
		$this->load->view('partials/_sidebar');
		$this->load->view('academic_calendar', $data);
		$this->load->view('partials/_footer');
		$this->load->view('partials/_scripts');
	}

	public function addAcademicCalendar()
	{ 
		$now = date('Y-m-d H:i:s');
        $data = array(  
                'name'     	 => $this->input->post('txt-add-academic-calendar-name'),  
                'start_year' => $this->input->post('txt-add-academic-calendar-start-year'),  
                'end_year'   => $this->input->post('txt-add-academic-calendar-end-year'),
                'start_date' => date( 'Y-m-d', strtotime( $this->input->post('txt-add-academic-calendar-start-date') ) ), 
                'end_date'   => date( 'Y-m-d', strtotime( $this->input->post('txt-add-academic-calendar-end-date') ) ),
                'created_at' => $now
                );   
        $this->db->insert('academic_calendar',$data);  
  
        redirect("/academic_calendar");  
	}
}
