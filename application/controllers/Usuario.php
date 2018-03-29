<?php 

class Usuario extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Usuario_Model');
    }

    public function index(){
        $ok = getenv("OK");
        echo $ok;
    }
    public function login(){
        $ok = $this->Usuario_Model->login();
        echo json_encode($ok);
    }

}