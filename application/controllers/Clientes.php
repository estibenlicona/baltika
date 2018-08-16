<?php
defined('BASEPATH') OR exit('No direct script access allowed');

final class Clientes extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view("clientes/listado", ["mensaje" => "Vengo del controlador"]);
    }

    public function nuevo()
    {
        $this->load->view("clientes/nuevo", ["mensaje" => "Agregar un cliente nuevo"]);
    }
}
//End of file applications/controller/Hello.php
