<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cliente extends CI_Controller {

	public function index()
	{
		$this->load->model("ClienteModel");
		$data['data']=$this->ClienteModel->ListaClientes();
		$data['hola']="http://t1.gstatic.com/images?q=tbn:ANd9GcSq3MHYIrl_BcNMTVtXpiBi2G_B5kmILJTdwnqSTHpksBAhoQnVgQ";
		$this->load->view('Cliente/Index',$data);
	}

	public function Crear()
	{
		$this->load->view('Cliente/Crear');
	}

	public function CrearCliente()
	{
		$cliente=array(
			'Cedula' => $this->input->post('cedula') ,
			'Nombre' => $this->input->post('nombre') ,
			'Email' => $this->input->post('email') ,
			'Direccion'=> $this->input->post('direccion') ,
			'Usuario' => $this->input->post('usuario') ,
			'Contrasena' => $this->input->post('contrasena') ,
			'Pais' => $this->input->post('pais') );

		$this->load->model("ClienteModel");
		if($this->ClienteModel->Crear($cliente))
		{
			$data['data']=$this->ClienteModel->ListaClientes();
			$data['hola']="http://t1.gstatic.com/images?q=tbn:ANd9GcSq3MHYIrl_BcNMTVtXpiBi2G_B5kmILJTdwnqSTHpksBAhoQnVgQ";
			$this->load->view('Cliente/Index',$data);
		}
		else
		{
			$this->load->view('welcome_message');
		}
	}

	public function Editar()
	{
		$id=$this->uri->segment(3);
		$this->load->model("ClienteModel");
		$data['data']=$this->ClienteModel->ObtenerCliente($id);
		$this->load->view('Cliente/Editar',$data);
	}

	public function EditarCliente()
	{
		$id=$this->input->post('id'); 

		$cliente=array(
			'Cedula' => $this->input->post('cedula') ,
			'Nombre' => $this->input->post('nombre') ,
			'Email' => $this->input->post('email') ,
			'Direccion'=> $this->input->post('direccion') ,
			'Pais' => $this->input->post('pais') );

		$this->load->model("ClienteModel");
		if($this->ClienteModel->Editar($id,$cliente))
		{
			redirect(base_url()."Cliente");
		}
		else
		{
			$this->load->view('welcome_message');
		}
	}

	public function Eliminar()
	{
		$id=$this->uri->segment(3);

		$this->load->model("ClienteModel");
		if($this->ClienteModel->Eliminar($id))
		{
			redirect(base_url()."Cliente");
		}
		else
		{
			$this->load->view('welcome_message');
		}
	}
}