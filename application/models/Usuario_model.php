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

  public function eliminarUsuario($id)
  {
    $this->db->where('id', $id);
    $this->db->delete('usuario');
    redirect('usuario/inicio');
  }

  public function editarUsuario($id)
  {
    //$this->load->view("index");
    $query = $this->db->get_where('usuario', array('id' => $id));
    if($query->num_rows() > 0)
    {
      return $query->row();
    }

  }

  public function updateUsuario($data1, $data2, $data3)
  {
    $data3 = md5($data3);
    $datos = array('id' => $data1, 'usuario' => $data2, 'contraseña' => $data3);
    $this->db->where('id', $data1);
    $this->db->update('usuario', $datos);
    redirect('usuario/inicio');
  }

}

 ?>
