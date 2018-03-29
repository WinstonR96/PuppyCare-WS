<?php 
class Usuario_Model extends CI_Model{

    public function login(){
        $query = $this->db->get('usuarios', 10);
        return $query->result();
    }
}