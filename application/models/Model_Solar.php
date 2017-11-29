<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_Solar extends CI_Model {

	function __construct(){

		parent::__construct();

	}

	function getSolar()
	{

		return $this->db->get('solar_vista');

	}


}