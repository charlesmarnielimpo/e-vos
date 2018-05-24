<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('partials/_header');
		$this->load->view('partials/_topbar');
		$this->load->view('partials/_sidebar');
		$this->load->view('welcome_message');
		$this->load->view('partials/_footer');
		$this->load->view('partials/_scripts');
	}
}
