<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Aulas extends CI_Controller {

	function __construct(){
		parent::__construct();
	}

	//Carga el modelo y la vista de aulas
	public function index()
	{
		$this->load->model("AulasModel");
		$data['data']=$this->AulasModel->ListaAulas();
		$data['hola']="http://t1.gstatic.com/images?q=tbn:ANd9GcSq3MHYIrl_BcNMTVtXpiBi2G_B5kmILJTdwnqSTHpksBAhoQnVgQ";
		$this->load->view('Aulas/Index',$data);
	}

	//Carga la vista para crear aulas
	public function Crear()
	{
		$this->load->view('Aulas/Crear');
	}

	//Método para crear aulas
	public function CrearAulas()
	{
		$cliente=array(
			'Codigo' => $this->input->post('codigo') ,
			'Nombre' => $this->input->post('nombre') ,
			'Ubicacion' => $this->input->post('ubicacion'));

		$this->load->model("AulasModel");
		if($this->AulasModel->Crear($aulas))
		{
			$data['data']=$this->AulasModel->ListaAulas();
			$data['hola']="http://t1.gstatic.com/images?q=tbn:ANd9GcSq3MHYIrl_BcNMTVtXpiBi2G_B5kmILJTdwnqSTHpksBAhoQnVgQ";
			$this->load->view('Aulas/Index',$data);
		}
		else
		{
			$this->load->view('welcome_message');
		}
	}

	//Método para cargar el modelo y la vista de editar aulas
	public function Editar()
	{
		$id=$this->uri->segment(3);
		$this->load->model("AulasModel");
		$data['data']=$this->AulasModel->ObtenerAulas($id);
		$this->load->view('Aulas/Editar',$data);
	}

	//Método para editar aulas
	public function EditarAulas()
	{
		$id=$this->input->post('id'); 

		$aulas=array(
			'Codigo' => $this->input->post('codigo') ,
			'Nombre' => $this->input->post('nombre') ,
			'Ubicación' => $this->input->post('ubicacion'));

		$this->load->model("AulasModel");
		if($this->AulasModel->Editar($id,$aulas))
		{
			redirect(base_url()."Aulas");
		}
		else
		{
			$this->load->view('welcome_message');
		}
	}

	//Método para eliminar aulas
	public function EliminarAulas()
	{
		$id=$this->uri->segment(3);

		$this->load->model("AulasModel");
		if($this->AulasModel->EliminarAulas($id))
		{
			redirect(base_url()."Aulas");
		}
		else
		{
			$this->load->view('welcome_message');
		}
	}
}