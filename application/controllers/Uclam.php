<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Uclam extends CI_Controller {

	public function index()
	{
		$this->load->view('uclam');
	}

	public function carreras()
	{
		$this->load->view('carreras');
	}
}
