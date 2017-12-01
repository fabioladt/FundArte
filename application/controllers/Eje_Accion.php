<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Eje_Accion extends CI_Controller
{

	function __construct(){

		parent::__construct();

	}

	public function index()
	{
		$data = array('titulo' => 'Ejes de Acción');
		$this->load->view("estructura/head", $data);
		$this->load->view("estructura/nav_publico");
		$this->load->view("fundacion/eje_accion");
		$this->load->view("estructura/footer");
	}

}