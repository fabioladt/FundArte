<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Donacion extends CI_Controller
{

	function __construct(){

		parent::__construct();

	}

	public function index()
	{
		$data = array('titulo' => 'Donaciones');
		$this->load->view("estructura/head", $data);
		$this->load->view("estructura/nav_publico");
		$this->load->view("donacion/donacion");
		$this->load->view("estructura/footer");
	}

}