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
echo $clave;
		if(($email=="avantica@gmail.com") && ($clave=="123"))
		{
			echo "Hola";
			redirect(base_url()."Administrativos");
		}
		$this->load->view('Login/Login');
	}
}