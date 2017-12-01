<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Contacto extends CI_Controller
{

	function __construct(){

		parent::__construct();

	}

	public function index()
	{
		$data = array('titulo' => 'Contacto!');
		$this->load->view("estructura/head", $data);
		$this->load->view("estructura/nav_publico");
		$this->load->view("contacto/contacto");
		$this->load->view("estructura/footer");
	}

}