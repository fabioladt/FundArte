<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Fundacion extends CI_Controller
{

	function __construct(){

		parent::__construct();

	}

	public function index()
	{
		$data = array('titulo' => 'De la Fundación');
		$this->load->view("estructura/head", $data);
		$this->load->view("estructura/nav_publico");
		$this->load->view("fundacion/fundacion");
		$this->load->view("estructura/footer");
	}

}