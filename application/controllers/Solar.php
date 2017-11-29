<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Solar extends CI_Controller
{

	function __construct(){

		parent::__construct();
		$this->load->model('Model_Solar');

	}

	public function index()
	{
		$data = array('titulo' => 'Solar');
		$this->load->view("estructura/head", $data);
		$this->load->view("estructura/nav_publico");
		$result = $this->Model_Solar->getSolar();
		$data = array('solar' => $result);
		$this->load->view("eventos/solar", $data);
		$this->load->view("estructura/footer");
	}

}
