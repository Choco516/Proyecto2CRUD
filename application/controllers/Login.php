<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	//Carga la vista de login
	public function index()
	{
		$this->load->view('Login/Login');
	}
}