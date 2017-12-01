<?php

class Model_Exposiciones extends CI_Model {

  function __construct(){
    parent::__construct();
    $this->load->database();
  }
//inicio -> index
  public function cargarExposicion()
  {
    //$this->load->view("index");
    $query = $this->db->query("Select * from exposicion");
    return $query->result();
  }

  function getExposiciones()
	{
       return $this->db->get('exposicion');
	}

//delete
  public function eliminarExposicion($id)
  {
    $this->db->where('id', $id);
    $this->db->delete('exposicion');
    redirect('exposicion/inicio');
  }


//upate
  public function editarExposicion($id)
  {
    //$this->load->view("index");
    $query = $this->db->get_where('exposicion', array('id' => $id));
    if($query->num_rows() > 0)
    {
      return $query->row();
    }

  }

  public function updateExposicion($data1, $data2, $data3, $data4, $data5)
  {
    //$data3 = md5($data3);
    $datos = array('id' => $data1, 'nombre' => $data2, 'fecha_inicio' => $data3, 'fecha_fin' => $data4, 'imagen' => $data5);
    $this->db->where('id', $data1);
    $this->db->update('exposicion', $datos);
    redirect('exposicion/inicio');
  }

}

 ?>
