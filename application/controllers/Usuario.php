<?php

class Usuario extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Usuario_model');
  }

//pagina de bienvenida
    public function index(){

      $data = array('titulo' => 'FundArte');
      $this->load->view("estructura/head", $data);
      $this->load->view("estructura/nav_crud");
      $this->load->view("home/index_crud");
      $this->load->view("estructura/footer");
    }

//inicio -> index Usuarios
    public function inicio(){

      $data = array('titulo' => 'FundArte');
      $this->load->view("estructura/head", $data);
      $this->load->view("estructura/nav_crud");

      //$this->load->view('usuario/head_usuario');
      $result = $this->Usuario_model->getUsuarios();
		  $data = array('cargar' => $result);
		  $this->load->view("usuario/index", $data);

      //$this->load->view("home/index_crud");
      $this->load->view("estructura/footer");

    }

//Edicion de Usuarios
    public function editar($id)
    {
      $data = array('titulo' => 'FundArte');
      $this->load->view("estructura/head", $data);
      $this->load->view("estructura/nav_crud");

      $this->load->model('Usuario_model');
      $usu = $this->Usuario_model->editarUsuario($id);
      //print_r($usu->id);
      //printf($usu->usuario);
      //printf($usu->contraseña);

      $this->load->view("usuario/editar", ['usu'=>$usu]);
      echo $id;
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
        $this->form_validation->set_rules('usuario', 'Username', 'required');
        $this->form_validation->set_rules('contraseña', 'Password', 'required');

        //if form validation true
        if($this->form_validation->run() == TRUE){
          //echo 'form validated';

         //add user in database
          $data1 = $datos['id'];
          $data2 = $datos['usuario'];
          $data3 = $datos['contraseña'];
          $this->Usuario_model->updateUsuario($data1, $data2, $data3);

          $this->session->set_flashdata("success", "Tu cuenta ha sido creada. Puedes logearte ahora!!!...");
          redirect("usuario/inicio", "refresh");
        }
      }

      $this->load->view('usuario/inicio');
      $this->load->view("estructura/footer");
    }

//Eliminacion de Usuarios
    public function eliminar($id = NULL)
    {
      if($id != NULL)
      {
        $this->Usuario_model->eliminarUsuario($id);
      }
      $this->load->view("usuario/register");
    }


  }


?>
