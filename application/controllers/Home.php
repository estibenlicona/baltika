<?php
defined('BASEPATH') OR exit('No direct script access allowed');

final class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view("home/index.php");
    }
}
//End of file applications/controller/Hello.php
