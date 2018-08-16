<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Estudiantes extends CI_Controller {

	public function index()
	{
		$this->load->view('estudiantes/listado');
	}

	public function nuevo()
	{
		$this->load->view('estudiantes/nuevo');
	}
}
