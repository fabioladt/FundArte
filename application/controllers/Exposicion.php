<?php

class Exposicion extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Model_Exposiciones');
  }

//Pantalla de Inicio -> Index de Usuarios
    public function inicio(){

      $data = array('titulo' => 'FundArte');
      $this->load->view("estructura/head", $data);
      $this->load->view("estructura/nav_crud");

      //$this->load->view('usuario/head_usuario');
      $result = $this->Model_Exposiciones->getExposiciones();
		  $data = array('cargar' => $result);
		  $this->load->view("exposicion/index", $data);

      //$this->load->view("home/index_crud");
      $this->load->view("estructura/footer");


    }

//Edicion de Usuarios
    public function editar($id)
    {
      $data = array('titulo' => 'FundArte');
      $this->load->view("estructura/head", $data);
      $this->load->view("estructura/nav_crud");

      $this->load->model('Model_Exposiciones');
      $exp = $this->Model_Exposiciones->editarExposicion($id);
      //print_r($usu->id);
      //printf($usu->usuario);
      //printf($usu->contraseña);

      $this->load->view("exposicion/editar", ['exp'=>$exp]);
      //echo $id;
      $this->load->view("estructura/footer");
    }

    public function update()
    {
      $data = array('titulo' => 'FundArte');
      $this->load->view("estructura/head", $data);
      $this->load->view("estructura/nav_crud");

      //cargar Vista
      $datos = $this->input->post();
      if(isset($_POST['update']))
      {

        //$this->load->view('usuario/head_usuario');
        $this->form_validation->set_rules('id', 'ID', 'required');
        $this->form_validation->set_rules('nombre', 'Nombre', 'required');
        $this->form_validation->set_rules('fecha_i', 'inicio', 'required');
        $this->form_validation->set_rules('fecha_f', 'Final', 'required');
        $this->form_validation->set_rules('imagen', 'Detalle', 'required');

        //if form validation true
        if($this->form_validation->run() == TRUE){
          //echo 'form validated';

         //add user in database
          $data1 = $datos['id'];
          $data2 = $datos['nombre'];
          $data3 = $datos['fecha_i'];
          $data4 = $datos['fecha_f'];
          $data5 = $datos['imagen'];
          $this->Model_Exposiciones->updateExposicion($data1, $data2, $data3, $data4, $data5);

          $this->session->set_flashdata("success", "Tu cuenta ha sido creada. Puedes logearte ahora!!!...");
          redirect("exposicion/inicio", "refresh");
        }
      }

      $this->load->view('exposicion/inicio');
      $this->load->view("estructura/footer");
    }
//delete
    public function eliminar($id = NULL)
    {
      if($id != NULL)
      {
        $this->Model_Exposiciones->eliminarExposicion($id);
      }
      $this->load->view("exposicion/registro");
    }


//save
    public function registro()
    {
    $data = array('titulo' => 'FundArte');
    $this->load->view("estructura/head", $data);
    $this->load->view("estructura/nav_crud");

    //cargar Vista
    if(isset($_POST['register']))
    {

      //$this->load->view('usuario/head_usuario');
      //$this->form_validation->set_rules('id', 'ID', 'required');
      $this->form_validation->set_rules('nombre', 'nombre', 'required');
      $this->form_validation->set_rules('fecha_i', 'fecha_inicio', 'required');
      $this->form_validation->set_rules('fecha_f', 'fecha_fin', 'required');
      $this->form_validation->set_rules('imagen', 'imagen', 'required');

      //if form validation true
      if($this->form_validation->run() == TRUE){
        //echo 'form validated';

       //add user in database
        $data = array('nombre' => $_POST['nombre'], 'fecha_inicio' => $_POST['fecha_i'] , 'fecha_fin' => $_POST['fecha_f'] , 'imagen' => $_POST['imagen'] );
        $this->db->insert('exposicion', $data);

        $this->session->set_flashdata("success", "Tu cuenta ha sido creada. Puedes logearte ahora!!!...");
        redirect("exposicion/inicio", "refresh");
      }
    }

    $this->load->view('exposicion/registro');
    $this->load->view("estructura/footer");
    }

  }


?>
