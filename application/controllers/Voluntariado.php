<?php

class Voluntariado extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Model_Voluntariado');
  }

    public function index(){

      $data = array('titulo' => 'FundArte');
      $this->load->view("estructura/head", $data);
      $this->load->view("estructura/nav_crud");
      $this->load->view("home/index_crud");
      $this->load->view("estructura/footer");
      /*$this->load->view('usuario/head_usuario');
      $result = $this->Usuario_model->getUsuarios();
		  $data = array('cargar' => $result);
		  $this->load->view("usuario/index", $data);*/
    }

    public function inicio(){

      $data = array('titulo' => 'FundArte');
      $this->load->view("estructura/head", $data);
      $this->load->view("estructura/nav_crud");

      //$this->load->view('usuario/head_usuario');
      $result = $this->Model_Voluntariado->getVoluntariado();
		  $data = array('cargar' => $result);
		  $this->load->view("voluntariado/index", $data);

      //$this->load->view("home/index_crud");
      $this->load->view("estructura/footer");


    }


    public function editar($id)
    {
      $data = array('titulo' => 'FundArte');
      $this->load->view("estructura/head", $data);
      $this->load->view("estructura/nav_crud");

      $this->load->model('Model_Voluntariado');
      $eve = $this->Model_Voluntariado->editarVoluntariado($id);
      //print_r($usu->id);
      //printf($usu->usuario);
      //printf($usu->contraseña);

      $this->load->view("voluntariado/editar", ['eve'=>$eve]);
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
          $data5 = $datos['descripcion'];
          $data6 = $datos['imagen'];
          $data7 = $datos['estado'];
          $data8 = $datos['correo'];
          $this->Model_Voluntariado->updateVoluntariado($data1, $data2, $data3, $data4, $data5, $data6, $data7, $data8);

          $this->session->set_flashdata("success", "Ha creado voluntariado correctamente");
          redirect("voluntariado/inicio", "refresh");
        }
      }

      $this->load->view('voluntariado/inicio');
      $this->load->view("estructura/footer");
    }
//delete
    public function eliminar($id = NULL)
    {
      if($id != NULL)
      {
        $this->Model_Voluntariado->eliminarVoluntariado($id);
      }
      $this->load->view("voluntariado/registro");
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
      $this->form_validation->set_rules('descripcion', 'descripcion', 'required');
      $this->form_validation->set_rules('imagen', 'imagen', 'required');
      $this->form_validation->set_rules('estado', 'estado', 'required');
      $this->form_validation->set_rules('correo', 'correo', 'required');

      //if form validation true
      if($this->form_validation->run() == TRUE){
        //echo 'form validated';

       //add user in database
        $data = array('nombre' => $_POST['nombre'], 'fecha_inicio' => $_POST['fecha_i'] , 'fecha_fin' => $_POST['fecha_f'] , 'descripcion' => $_POST['descripcion'], 'imagen' => $_POST['imagen'], 'estado' => $_POST['estado'], 'correo' => $_POST['correo'] );
        $this->db->insert('voluntariado', $data);

        $this->session->set_flashdata("success", "Registro creado con exito");
        redirect("voluntariado/inicio", "refresh");
      }
    }

    $this->load->view('voluntariado/registro');
    $this->load->view("estructura/footer");
    }

  }


?>
