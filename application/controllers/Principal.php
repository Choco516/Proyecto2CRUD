<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Principal extends CI_Controller {
	function __construct(){
		parent::__construct();
	}

	//Carga la vista principal
	public function index()
	{
		$this->load->view('Principal/Index');
	}
}