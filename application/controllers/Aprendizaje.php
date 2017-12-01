<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Aprendizaje extends CI_Controller
{

	function __construct(){

		parent::__construct();
		//$this->load->model('Model_Home');

	}

	public function index()
	{

		$data = array('titulo' => 'Aprendizaje');
		$this->load->view("estructura/head", $data);
		$this->load->view("estructura/nav_publico");
		

		$result = $this->db->get('clase_vista');
		$datos = array('clases'=> $result);

		$this->load->view("eventos/aprendizaje", $datos);
		$this->load->view("estructura/footer");
		
	}

}