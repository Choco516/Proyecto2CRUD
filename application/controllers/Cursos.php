<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cursos extends CI_Controller {

	function __construct(){
		parent::__construct();
	}

	//Carga el modelo y la vista de cursos
	public function index()
	{
		$this->load->model("CursosModel");
		$data['data']=$this->CursosModel->ListaCursos();
		$data['hola']="http://t1.gstatic.com/images?q=tbn:ANd9GcSq3MHYIrl_BcNMTVtXpiBi2G_B5kmILJTdwnqSTHpksBAhoQnVgQ";
		$this->load->view('Cursos/Index',$data);
	}

	//Carga la vista para crear cursos
	public function Crear()
	{
		$this->load->view('Cursos/Crear');
	}

	//Método para crear cursos
	public function CrearCursos()
	{
		$cursos=array(
			'Id_Curso' => $this->input->post('id_curso') ,
			'Carrera' => $this->input->post('carrera'));

		$this->load->model("CursosModel");
		if($this->CursosModel->Crear($cursos))
		{
			$data['data']=$this->CursosModel->ListaCursos();
			$data['hola']="http://t1.gstatic.com/images?q=tbn:ANd9GcSq3MHYIrl_BcNMTVtXpiBi2G_B5kmILJTdwnqSTHpksBAhoQnVgQ";
			$this->load->view('Cursos/Index',$data);
		}
		else
		{
			$this->load->view('welcome_message');
		}
	}

	//Método para cargar el modelo y la vista de editar cursos
	public function Editar()
	{
		$id_curso=$this->uri->segment(3);
		$this->load->model("CursosModel");
		$data['data']=$this->CursosModel->ObtenerCursos($id_curso);
		$this->load->view('Cursos/Editar',$data);
	}

	//Método para editar cursos
	public function EditarCursos()
	{
		$id=$this->input->post('id'); 

		$cursos=array(
			'Id_Curso' => $this->input->post('id_curso') ,
			'Carrera' => $this->input->post('carrera'));

		$this->load->model("CursosModel");
		if($this->CursosModel->EditarCursos($id,$cursos))
		{
			redirect(base_url()."Cursos");
		}
		else
		{
			$this->load->view('welcome_message');
		}
	}

	//Método para eliminar cursos
	public function EliminarCursos()
	{
		$id_curso=$this->uri->segment(3);

		$this->load->model("CursosModel");
		if($this->CursosModel->EliminarCursos($id_curso))
		{
			redirect(base_url()."Cursos");
		}
		else
		{
			$this->load->view('welcome_message');
		}
	}
}