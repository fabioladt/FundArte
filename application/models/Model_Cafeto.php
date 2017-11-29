<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_Cafeto extends CI_Model {

	function __construct(){

		parent::__construct();

	}

	function getCafeto()
	{

		return $this->db->get('cafeto_vista');

	}


}