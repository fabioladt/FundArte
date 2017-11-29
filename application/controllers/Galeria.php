<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Galeria extends CI_Controller
{

	function __construct(){

		parent::__construct();
		//$this->load->model('Model_Home');

	}

	public function index()
	{

		$data = array('titulo' => 'Eventos');
		$this->load->view("estructura/head", $data);
		$this->load->view("estructura/nav_publico");
		

		$result = $this->db->get('solar_vista');
		//$datos = array('eventos'=> $result);
		$datos['eventos'] = $result;

		$result2 = $this->db->get('cafeto_vista');
		//$datos = array('exposiciones'=> $result2);
		$datos['exposiciones'] = $result2;

		$this->load->view("eventos/galeria", $datos);
		$this->load->view("estructura/footer");
		
	}

}