<?php
 
class Validar extends CI_Controller {
 
	 public function __construct() {
	 parent::__construct();
	 }
 
 	//Carga el modelo y la vista de validación
	 function index() {
		 $this->load->model('ValidarModel'); 
		 $administrativos = $this->ValidarModel->obtenerAdministrativos(); 
		 $this->load->view('Validar/Index'); 
	 }

	 //Carga la función update y muerta la pagina principal
	 function validar() {
		 $this->load->model('ValidarModel'); 
		 $administrativos = $this->ValidarModel->update();
		 $this->load->view('Principal/Index'); 
	 }
}
 
?>