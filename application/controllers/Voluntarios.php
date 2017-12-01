<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Voluntarios extends CI_Controller
{

	function __construct(){

		parent::__construct();
		//$this->load->model('Model_Home');

	}

	public function index()
	{

		$data = array('titulo' => 'Voluntarios');
		$this->load->view("estructura/head", $data);
		$this->load->view("estructura/nav_publico");
		

		$result = $this->db->get('voluntariado');
		$datos = array('Voluntarios'=> $result);

		$this->load->view("eventos/voluntarios", $datos);
		$this->load->view("estructura/footer");
		
	}

}