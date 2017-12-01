<?php

class Auth extends CI_Controller {
  function __construct(){
  parent::__construct();
  }

  public function login()
  {
    $this->form_validation->set_rules('usuario', 'Nombre de Usuario', 'required');
    $this->form_validation->set_rules('contraseña', 'Contraseña', 'required');

    if($this->form_validation->run() == TRUE){
      $usuario = $_POST['usuario'];
      $contraseña = md5($_POST['contraseña']);

      //check users in database
      $this->db->select('*');
      $this->db->from('usuario');
      $this->db->where(array('usuario' => $usuario, 'contraseña' => $contraseña));
      $query = $this->db->get();

      $user = $query->row();

      //if user exists
      if($user->usuario){
        //tempory message
        $this->session->set_flashdata("success", "Tu autentificacion es correcta");

        //set session variables
        $_SESSION['user_logged'] = TRUE;
        $_SESSION['usuario'] = $user->usuario;

        //redirect to profile page
        redirect("usuario/index", "refresh");

      }else {
        $this->session->set_flashdata("error", "No existe la cuenta en la Base de Datos");

        //redirect to login page
        redirect("auth/login", "refresh");
      }
    }
    $data = array('titulo' => 'Login');
    $this->load->view("estructura/head", $data);
    $this->load->view("estructura/nav_publico");
    $this->load->view('login');
    $this->load->view("estructura/footer");
  }

  public function logout(){
      unset($_SESSION);
      session_destroy();
      redirect("auth/login", "refresh");
    }

    public function register()
  {
    $data = array('titulo' => 'FundArte');
    $this->load->view("estructura/head", $data);
    $this->load->view("estructura/nav_crud");

    //cargar Vista
    if(isset($_POST['register']))
    {

      //$this->load->view('usuario/head_usuario');
      //$this->form_validation->set_rules('id', 'ID', 'required');
      $this->form_validation->set_rules('usuario', 'Username', 'required');
      $this->form_validation->set_rules('contraseña', 'Password', 'required');

      //if form validation true
      if($this->form_validation->run() == TRUE){
        //echo 'form validated';

       //add user in database
        $data = array('usuario' => $_POST['usuario'], 'contraseña' => md5($_POST['contraseña']) );
        $this->db->insert('usuario', $data);

        $this->session->set_flashdata("success", "Tu cuenta ha sido creada. Puedes logearte ahora!!!...");
        redirect("auth/login", "refresh");
      }
    }

    $this->load->view('register');
    $this->load->view("estructura/footer");
  }

}

?>
