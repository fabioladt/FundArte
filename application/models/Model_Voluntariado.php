<?php

class Model_Voluntariado extends CI_Model {

  function __construct(){
    parent::__construct();
    $this->load->database();
  }
//inicio -> index
  public function cargarVoluntariado()
  {
    //$this->load->view("index");
    $query = $this->db->query("Select * from voluntariado");
    return $query->result();
  }

  function getVoluntariado()
	{
       return $this->db->get('voluntariado');
	}

//delete
  public function eliminarVoluntariado($id)
  {
    $this->db->where('id', $id);
    $this->db->delete('voluntariado');
    redirect('voluntariado/inicio');
  }


//upate
  public function editarVoluntariado($id)
  {
    //$this->load->view("index");
    $query = $this->db->get_where('voluntariado', array('id' => $id));
    if($query->num_rows() > 0)
    {
      return $query->row();
    }

  }

  public function updateVoluntariado($data1, $data2, $data3, $data4, $data5, $data6, $data7, $data8)
  {
    //$data3 = md5($data3);
    $datos = array('id' => $data1, 'nombre' => $data2, 'fecha_inicio' => $data3, 'fecha_fin' => $data4, 'descripcion' => $data5, 'imagen' => $data6, 'estado' => $data7, 'correo' => $data8);
    $this->db->where('id', $data1);
    $this->db->update('voluntariado', $datos);
    redirect('voluntariado/inicio');
  }

}

 ?>
