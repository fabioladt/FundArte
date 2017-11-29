<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Cafeto extends CI_Controller
{

	function __construct(){

		parent::__construct();
		$this->load->model('Model_Cafeto');

	}

	public function index()
	{
		$data = array('titulo' => 'Cafeto');
		$this->load->view("estructura/head", $data);
		$this->load->view("estructura/nav_publico");
		$result = $this->Model_Cafeto->getCafeto();
		$data = array('cafeto' => $result);
		$this->load->view("eventos/cafeto", $data);
		$this->load->view("estructura/footer");
		
	}

}