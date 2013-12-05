<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Registrarse extends CI_Controller {
	function __construct(){
		parent::__construct();
	}

    //Carga la vista para registrarse
	public function index()
	{
		$this->load->view('Registrarse/Index');
	}
}