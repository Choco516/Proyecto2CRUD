<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->view('Login/Login');
	}

	public function Autenticar()
	{
		$email= $this->input->post('email');
		$clave= $this->input->post('clave');
		if(($email=="admin@gmail.com") && ($clave=="123"))
		{
			redirect(base_url()."Principal");
		}
		$this->load->view('Principal/Index');
	}
}