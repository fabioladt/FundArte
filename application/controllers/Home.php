<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Home extends CI_Controller
{

	function __construct(){

		parent::__construct();
		//$this->load->model('Model_Home');

	}

	public function index()
	{

		$data = array('titulo' => 'FundArte');
		$this->load->view("estructura/head", $data);
		$this->load->view("estructura/nav_publico");
		$this->load->view("home/index_publico");
		$this->load->view("estructura/footer");

	}

}
