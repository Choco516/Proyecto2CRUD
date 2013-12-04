<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Administrativos extends CI_Controller {
	function __construct(){
		parent::__construct();
	}


	public function index()
	{
		$this->load->model("AdministrativosModel");
		$data['data']=$this->AdministrativosModel->ListaAdministrativos();
		$data['hola']="http://t1.gstatic.com/images?q=tbn:ANd9GcSq3MHYIrl_BcNMTVtXpiBi2G_B5kmILJTdwnqSTHpksBAhoQnVgQ";
		$this->load->view('Administrativos/Index',$data);
	}

	public function Crear()
	{
		$this->load->view('Administrativos/Crear');
	}

	public function CrearAdministrativo()
	{
		$administrativos=array(
			'Cédula' => $this->input->post('cédula') ,
			'Nombre_Completo' => $this->input->post('nombre_completo') ,
			'Correo' => $this->input->post('correo') ,
			'Contraseña'=> $this->input->post('contraseña'));
		
		$this->load->model("AdministrativosModel");

		if($this->AdministrativosModel->Crear($administrativos))
		{
			$data['data']=$this->AdministrativosModel->ListaAdministrativos();
			$data['hola']="http://t1.gstatic.com/images?q=tbn:ANd9GcSq3MHYIrl_BcNMTVtXpiBi2G_B5kmILJTdwnqSTHpksBAhoQnVgQ";
			$this->load->view('Administrativos/Index',$data);
		}
		else
		{
			$this->load->view('welcome_message');
		}
	}

	public function Editar()
	{
		$id=$this->uri->segment(3);
		$this->load->model("AdministrativosModel");
		$data['data']=$this->AdministrativosModel->ObtenerAdministrativos($id);
		$this->load->view('Administrativos/Editar',$data);
	}

	public function EditarAdministrativo()
	{
		$id=$this->input->post('id'); 

		$administrativos=array(
			'Cédula' => $this->input->post('cedula') ,
			'Nombre_Completo' => $this->input->post('nombre_completo') ,
			'Correo' => $this->input->post('correo') ,
			'Contraseña'=> $this->input->post('contrasena'));

		$this->load->model("AdministrativosModel");
		if($this->AdministrativosModel->Editar($id,$administrativos))
		{
			redirect(base_url()."Administrativos");
		}
		else
		{
			$this->load->view('welcome_message');
		}
	}

	public function EliminarAdministrativos()
	{
		$id=$this->uri->segment(3);

		$this->load->model("AdministrativosModel");
		if($this->AdministrativosModel->EliminarAdministrativos($id))
		{
			redirect(base_url()."Administrativos");
		}
		else
		{
			$this->load->view('welcome_message');
		}
	}
}