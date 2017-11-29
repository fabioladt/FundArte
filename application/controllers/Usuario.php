<?php

class Usuario extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Usuario_model');
  }

    public function index(){
    //  $data['contenido'] = "usuario/index";
      //$data['usuarios'] = $this->Usuario_model->cargarUsuario();
      //$data = array('usuarios' => $result);
      //$this->load->view("usuario/index", $data);
      $this->load->view('usuario/head_usuario');
      $result = $this->Usuario_model->getUsuarios();
		  $data = array('cargar' => $result);
		  $this->load->view("usuario/index", $data);
    }

    public function registro(){
      $this->load->view("usuario/register");
    }

  }


?>
