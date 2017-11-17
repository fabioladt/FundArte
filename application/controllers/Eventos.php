<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Eventos extends CI_Controller
{

	function __construct(){

		parent::__construct();
		//$this->load->model('Model_Eventos');

	}

	public function index()
	{
		$data = array('titulo' => 'Eventos');
		$this->load->view("estructura/head", $data);
		$this->load->view("eventos/index");

	}

}
