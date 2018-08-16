<?php
defined('BASEPATH') OR exit('No direct script access allowed');

final class Hello extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
    }
    
    public function message()
    {
        $this->load->view("hello/message", ["message" => "Hello World"]);
    }
}
//End of file applications/controller/Hello.php