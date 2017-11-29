<?php

class Usuario_model extends CI_Model {

  function __construct(){
    parent::__construct();
    $this->load->database();
  }

  public function cargarUsuario()
  {
    //$this->load->view("index");
    $query = $this->db->query("Select * from usuario");
    return $query->result();
  }

  function getUsuarios()
	{

       return $this->db->get('usuario');

	}

}

 ?>
