<?php

class Clase extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Model_Clases');
  }

//Pantalla de inicio -> Index de Usuarios
    public function inicio(){

      $data = array('titulo' => 'FundArte');
      $this->load->view("estructura/head", $data);
      $this->load->view("estructura/nav_crud");

      //$this->load->view('usuario/head_usuario');
      $result = $this->Model_Clases->getClases();
		  $data = array('cargar' => $result);
		  $this->load->view("clase/index", $data);

      //$this->load->view("home/index_crud");
      $this->load->view("estructura/footer");


    }

//Edicion de Usuarios
    public function editar($id)
    {
      $data = array('titulo' => 'FundArte');
      $this->load->view("estructura/head", $data);
      $this->load->view("estructura/nav_crud");

      $this->load->model('Model_Clases');
      $cla = $this->Model_Clases->editarClase($id);
      //print_r($usu->id);
      //printf($usu->usuario);
      //printf($usu->contraseña);

      $this->load->view("clase/editar", ['cla'=>$cla]);
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
        $this->form_validation->set_rules('tipo', 'tipo', 'required');

        //if form validation true
        if($this->form_validation->run() == TRUE){
          //echo 'form validated';

         //add user in database
          $data1 = $datos['id'];
          $data2 = $datos['nombre'];
          $data3 = $datos['fecha_i'];
          $data4 = $datos['fecha_f'];
          $data5 = $datos['imagen'];
          $data6 = $datos['tipo'];
          $this->Model_Clases->updateClase($data1, $data2, $data3, $data4, $data5, $data6);

          $this->session->set_flashdata("success", "Tu cuenta ha sido creada. Puedes logearte ahora!!!...");
          redirect("clase/inicio", "refresh");
        }
      }

      $this->load->view('clase/inicio');
      $this->load->view("estructura/footer");
    }
//delete
    public function eliminar($id = NULL)
    {
      if($id != NULL)
      {
        $this->Model_Clases->eliminarClase($id);
      }
      $this->load->view("clase/registro");
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
      $this->form_validation->set_rules('tipo', 'tipo', 'required');

      //if form validation true
      if($this->form_validation->run() == TRUE){
        //echo 'form validated';

       //add user in database
        $data = array('nombre' => $_POST['nombre'], 'fecha_inicio' => $_POST['fecha_i'] , 'fecha_fin' => $_POST['fecha_f'] , 'imagen' => $_POST['imagen'], 'tipo' => $_POST['tipo'] );
        $this->db->insert('clase', $data);

        $this->session->set_flashdata("success", "Tu cuenta ha sido creada. Puedes logearte ahora!!!...");
        redirect("clase/inicio", "refresh");
      }
    }

    $this->load->view('clase/registro');
    $this->load->view("estructura/footer");
    }

  }


?>
