<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Positions extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->load->model('Positions_model');
	}

	public function index()
	{
		$data['positions'] = $this->Positions_model->read();
		$this->load->view('partials/_header');
		$this->load->view('partials/_topbar');
		$this->load->view('partials/_sidebar');
		$this->load->view('positions', $data);
		$this->load->view('partials/_footer');
		$this->load->view('partials/_scripts');
	}

	public function create()
	{
		$this->form_validation->set_rules('txt-add-position','Position','trim|required');
		if($this->form_validation->run()==false){
			// $this->index();
			redirect('/positions');
		}else{
			$position = array(
				'name'	=>	$this->input->post('txt-add-position')
			);
			$this->Positions_model->create($position);
			redirect('/positions');
		}
	}

	public function edit()
	{

	}

	public function delete()
	{

	}
}