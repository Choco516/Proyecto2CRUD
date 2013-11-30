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
		$cedula=$this->uri->segment(3);
		$this->load->model("AdministrativosModel");
		$data['data']=$this->AdministrativosModel->ObtenerAdministrativos($cedula);
		$this->load->view('Administrativos/Editar',$data);
	}

	public function EditarAdministrativo()
	{
		$cedula=$this->input->post('cédula'); 

		$administrativos=array(
			'Cédula' => $this->input->post('cédula') ,
			'Nombre_Completo' => $this->input->post('nombre_completo') ,
			'Correo' => $this->input->post('correo') ,
			'Contraseña'=> $this->input->post('contraseña'));

		$this->load->model("AdministrativosModel");
		if($this->AdministrativosModel->Editar($cedula,$administrativos))
		{
			redirect(base_url()."Administrativos");
		}
		else
		{
			$this->load->view('welcome_message');
		}
	}

	public function EliminarAdministrativo()
	{
		$cedula=$this->uri->segment(3);

		$this->load->model("AdministrativosModel");
		if($this->ClienteModel->Eliminar($cedula))
		{
			redirect(base_url()."Administrativos");
		}
		else
		{
			$this->load->view('welcome_message');
		}
	}
}