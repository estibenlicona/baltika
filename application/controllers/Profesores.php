<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profesores extends CI_Controller {

	public function index()
	{
		$this->load->view('profesores/listado');
	}

	public function nuevo()
	{
		$this->load->view('profesores/nuevo');
	}

	public function mostrar()
	{
		$datos = array();

		$datos['datos']['documento'] = "1028030389";
		$datos['datos']['nombre'] = "Estiben Licona";
		$datos['datos']['carrera'] = "Ingenieria de Sistemas";

		$datos['datos']['Semestre1']['materia1'] = "Algoritmo";
		$datos['datos']['Semestre1']['materia2'] = "Logica";
		$datos['datos']['Semestre1']['materia3'] = "Ingles 1";

		$datos['datos']['Semestre2']['materia1'] = "Bases de Datos";
		$datos['datos']['Semestre2']['materia2'] = "Redes 1";
		$datos['datos']['Semestre2']['materia3'] = "Ingles 2";

		$datos['datos']['Semestre3']['materia1'] = "Redes 2";
		$datos['datos']['Semestre3']['materia2'] = "Sistemas Operativos";
		$datos['datos']['Semestre3']['materia3'] = "Ingles 3";




		$this->load->view('profesores/mostrar', $datos);
	}
}
