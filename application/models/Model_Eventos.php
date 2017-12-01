<?php

class Model_Eventos extends CI_Model {

  function __construct(){
    parent::__construct();
    $this->load->database();
  }
//inicio -> index
  public function cargarEvento()
  {
    //$this->load->view("index");
    $query = $this->db->query("Select * from evento");
    return $query->result();
  }

  function getEventos()
	{
       return $this->db->get('evento');
	}

//delete
  public function eliminarEvento($id)
  {
    $this->db->where('id', $id);
    $this->db->delete('evento');
    redirect('evento/inicio');
  }


//upate
  public function editarEvento($id)
  {
    //$this->load->view("index");
    $query = $this->db->get_where('evento', array('id' => $id));
    if($query->num_rows() > 0)
    {
      return $query->row();
    }

  }

  public function updateEvento($data1, $data2, $data3, $data4, $data5)
  {
    //$data3 = md5($data3);
    $datos = array('id' => $data1, 'nombre' => $data2, 'fecha_inicio' => $data3, 'fecha_fin' => $data4, 'imagen' => $data5);
    $this->db->where('id', $data1);
    $this->db->update('evento', $datos);
    redirect('evento/inicio');
  }

}

 ?>
