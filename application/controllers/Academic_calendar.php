<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Academic_calendar extends CI_Controller {

	public function index()
	{
		$this->load->model('Academic_calendar_model');
		$data['academic_calendar'] = $this->Academic_calendar_model->read();
		$this->load->view('partials/_header');
		$this->load->view('partials/_topbar');
		$this->load->view('partials/_sidebar');
		$this->load->view('academic_calendar', $data);
		$this->load->view('partials/_footer');
		$this->load->view('partials/_scripts');
	}

	public function create()
	{
		$valid['success'] = array('success' => false);
		$academic_calendar_name = $this->input->post('txt-add-academic-calendar-name');
		if (is_null($academic_calendar_name)) {
			$valid['success'] = false; 
		} else {
			$now = date('Y-m-d H:i:s');
	        $data = array(
				'name'     	 => $this->input->post('txt-add-academic-calendar-name'),
				'start_year' => $this->input->post('txt-add-academic-calendar-start-year'),
				'end_year'   => $this->input->post('txt-add-academic-calendar-end-year'),
				'start_date' => date( 'Y-m-d', strtotime( $this->input->post('txt-add-academic-calendar-start-date') ) ),
				'end_date'   => date( 'Y-m-d', strtotime( $this->input->post('txt-add-academic-calendar-end-date') ) ),
				'created_at' => $now
				);
	        $this->load->model('Academic_calendar_model');
	        $this->Academic_calendar_model->create($data); 
		    $valid['success'] = true;     
	    }
	    echo json_encode($valid);
	}

	public function fetch()
     {

          $this->load->model('Academic_calendar_model');
          $academic_calendar = $this->Academic_calendar_model->read();

          $data = array();

          foreach($academic_calendar as $row) {

          	$start_date = date( 'm/d/Y', strtotime($row->start_date));
          	$end_date = date( 'm/d/Y', strtotime($row->end_date));
          	$button = '<button class="btn btn-default btn-outline academic_calendar_edit_modal" data-academic-calendar-id="' . $row->id . '" data-academic-calendar-name="' . $row->name . '" data-academic-calendar-start-year="' .$row->start_year. '" data-academic-calendar-end-year="' .$row->end_year. '" data-academic-calendar-start-date="' .$start_date. '" data-academic-calendar-end-date="' .$end_date. '" data-toggle="modal" data-target="#modal-edit-academic-calendar"><i class="mdi mdi-pencil fa-fw text-success"></i></button><button class="btn btn-default btn-outline" data-academic-calendar-id="' . $row->id . '" data-academic-calendar-name="' . $row->name . '" data-toggle="modal" data-target="#modal-delete-academic-calendar"><i class="mdi mdi-delete fa-fw text-danger"></i></button>';

               $data[] = array(
                    $row->name,
                    $row->start_year,
                    $row->end_year,
                    $start_date,
                    $end_date,
                    $button
               );
          }

          $output = array(
                 "data" => $data
            );
          echo json_encode($output);
          exit();
     }

    public function update() {
		$valid['success'] = array('success' => false);
		$id = $this->input->post('hdn_academic_calendar_id');

		if (is_null($id)) {
			$valid['success'] = false; 
		} else {
			$now = date('Y-m-d H:i:s');
	        $data = array(
				'name'     	 => $this->input->post('txt-edit-academic-calendar-name'),
				'start_year' => $this->input->post('txt-edit-academic-calendar-start-year'),
				'end_year'   => $this->input->post('txt-edit-academic-calendar-end-year'),
				'start_date' => date( 'Y-m-d', strtotime( $this->input->post('txt-edit-academic-calendar-start-date') ) ),
				'end_date'   => date( 'Y-m-d', strtotime( $this->input->post('txt-edit-academic-calendar-end-date') ) ),
				'updated_at' => $now
				);
	        $this->load->model('Academic_calendar_model');
	        $this->Academic_calendar_model->update($id,$data);
		    $valid['success'] = true;     
	    }
	    echo json_encode($valid);
	}

	public function delete() {
		$valid['success'] = array('success' => false);
		$id = $this->input->post('hdn_academic_calendar_id_delete');

		if (is_null($id)) {
			$valid['success'] = false; 
		} else {
			$this->load->model('Academic_calendar_model');
	        $this->Academic_calendar_model->delete($id);
		    $valid['success'] = true;     
	    }
	    echo json_encode($valid);
	}
}
