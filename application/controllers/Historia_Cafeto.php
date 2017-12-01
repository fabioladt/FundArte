<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Historia_Cafeto extends CI_Controller
{

	function __construct(){

		parent::__construct();

	}

	public function index()
	{
		$data = array('titulo' => 'Historia Cafeto');
		$this->load->view("estructura/head", $data);
		$this->load->view("estructura/nav_publico");
		$this->load->view("eventos/historia_cafeto");
		$this->load->view("estructura/footer");
	}

}