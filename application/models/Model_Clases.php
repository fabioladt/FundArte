<?php

class Model_Clases extends CI_Model {

  function __construct(){
    parent::__construct();
    $this->load->database();
  }
//inicio -> index
  public function cargarClase()
  {
    //$this->load->view("index");
    $query = $this->db->query("Select * from clase");
    return $query->result();
  }

  function getClases()
	{
       return $this->db->get('clase');
	}

//delete
  public function eliminarClase($id)
  {
    $this->db->where('id', $id);
    $this->db->delete('clase');
    redirect('clase/inicio');
  }


//upate
  public function editarClase($id)
  {
    //$this->load->view("index");
    $query = $this->db->get_where('clase', array('id' => $id));
    if($query->num_rows() > 0)
    {
      return $query->row();
    }

  }

  public function updateClase($data1, $data2, $data3, $data4, $data5, $data6)
  {
    //$data3 = md5($data3);
    $datos = array('id' => $data1, 'nombre' => $data2, 'fecha_inicio' => $data3, 'fecha_fin' => $data4, 'imagen' => $data5, 'tipo' => $data6);
    $this->db->where('id', $data1);
    $this->db->update('clase', $datos);
    redirect('clase/inicio');
  }

}

 ?>
