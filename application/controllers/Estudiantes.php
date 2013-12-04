<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Estudiantes extends CI_Controller {

	public function index()
	{
		$this->load->model("EstudiantesModel");
		$data['data']=$this->EstudiantesModel->ListaEstudiantes();
		$data['hola']="http://t1.gstatic.com/images?q=tbn:ANd9GcSq3MHYIrl_BcNMTVtXpiBi2G_B5kmILJTdwnqSTHpksBAhoQnVgQ";
		$this->load->view('Estudiantes/Index',$data);
	}

	public function Crear()
	{
		$this->load->view('Estudiantes/Crear');
	}

	public function CrearEstudiantes()
	{
		$estudiantes=array(
			'Cédula' => $this->input->post('cédula') ,
			'Nombre_Completo' => $this->input->post('nombre_completo') ,
			'Correo' => $this->input->post('correo') ,
			'Contraseña'=> $this->input->post('contraseña'));

		$this->load->model("EstudiantesModel");
		if($this->EstudiantesModel->Crear($estudiantes))
		{
			$data['data']=$this->EstudiantesModel->ListaEstudiantes();
			$data['hola']="http://t1.gstatic.com/images?q=tbn:ANd9GcSq3MHYIrl_BcNMTVtXpiBi2G_B5kmILJTdwnqSTHpksBAhoQnVgQ";
			$this->load->view('Estudiantes/Index',$data);
		}
		else
		{
			$this->load->view('welcome_message');
		}
	}

	public function Editar()
	{
		$id=$this->uri->segment(3);
		$this->load->model("EstudiantesModel");
		$data['data']=$this->EstudiantesModel->ObtenerEstudiantes($id);
		$this->load->view('Estudiantes/Editar',$data);
	}

	public function EditarEstudiantes()
	{
		$id=$this->input->post('id'); 

		$estudiantes=array(
			'Cédula' => $this->input->post('cedula') ,
			'Nombre_Completo' => $this->input->post('nombre_completo') ,
			'Correo' => $this->input->post('correo') ,
			'Contraseña'=> $this->input->post('contrasena'));

		$this->load->model("EstudiantesModel");
		if($this->EstudiantesModel->Editar($id,$estudiantes))
		{
			redirect(base_url()."Estudiantes");
		}
		else
		{
			$this->load->view('welcome_message');
		}
	}

	public function EliminarEstudiantes()
	{
		$id=$this->uri->segment(3);

		$this->load->model("EstudiantesModel");
		if($this->EstudiantesModel->EliminarEstudiantes($id))
		{
			redirect(base_url()."Estudiantes");
		}
		else
		{
			$this->load->view('welcome_message');
		}
	}
}