<?php

class Usuario extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Usuario_model');
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

    public function registro(){
      $this->load->view("usuario/register");
    }

  }


?>
