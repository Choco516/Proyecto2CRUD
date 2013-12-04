<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profesores extends CI_Controller {

	function __construct(){
		parent::__construct();
	}

	public function index()
	{
		$this->load->model("ProfesoresModel");
		$data['data']=$this->ProfesoresModel->ListaProfesores();
		$data['hola']="http://t1.gstatic.com/images?q=tbn:ANd9GcSq3MHYIrl_BcNMTVtXpiBi2G_B5kmILJTdwnqSTHpksBAhoQnVgQ";
		$this->load->view('Profesores/Index',$data);
	}

	public function Crear()
	{
		$this->load->view('Profesores/Crear');
	}

	public function CrearProfesores()
	{
		$profesores=array(
			'Cédula' => $this->input->post('cédula') ,
			'Nombre_Completo' => $this->input->post('nombre_completo') ,
			'Correo' => $this->input->post('correo') ,
			'Contraseña'=> $this->input->post('contraseña'));

		$this->load->model("ProfesoresModel");
		if($this->ProfesoresModel->Crear($profesores))
		{
			$data['data']=$this->ProfesoresModel->ListaProfesores();
			$data['hola']="http://t1.gstatic.com/images?q=tbn:ANd9GcSq3MHYIrl_BcNMTVtXpiBi2G_B5kmILJTdwnqSTHpksBAhoQnVgQ";
			$this->load->view('Profesores/Index',$data);
		}
		else
		{
			$this->load->view('welcome_message');
		}
	}

	public function Editar()
	{
		$cedula=$this->uri->segment(3);
		$this->load->model("ProfesoresModel");
		$data['data']=$this->ProfesoresModel->ObtenerProfesores($cedula);
		$this->load->view('Profesores/Editar',$data);
	}

	public function EditarProfesores()
	{
		$id=$this->input->post('id'); 

		$profesores=array(
			'Cédula' => $this->input->post('cédula') ,
			'Nombre_Completo' => $this->input->post('nombre_completo') ,
			'Correo' => $this->input->post('correo') ,
			'Contraseña'=> $this->input->post('contraseña'));

		$this->load->model("ProfesoresModel");
		if($this->ProfesoresModel->Editar($id,$profesores))
		{
			redirect(base_url()."Profesores");
		}
		else
		{
			$this->load->view('welcome_message');
		}
	}

	public function EliminarProfesores()
	{
		$id=$this->uri->segment(3);

		$this->load->model("ProfesoresModel");
		if($this->ProfesoresModel->EliminarProfesores($id))
		{
			redirect(base_url()."Profesores");
		}
		else
		{
			$this->load->view('welcome_message');
		}
	}
}