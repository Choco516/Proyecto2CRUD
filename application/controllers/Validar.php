<?php
 
class Validar extends CI_Controller {
 
 public function __construct() {
 parent::__construct();
 }
 
 function index() {
 $this->load->model('ValidarModel'); //cargamos el modelo
 //Obtener datos de la tabla 'contacto'
 $administrativos = $this->ValidarModel->obtenerAdministrativos(); //llamamos a la función getData() del modelo creado anteriormente.
 //load de vistas
 $this->load->view('Validar/Index'); //llamada a la vista, que crearemos posteriormente
 }

 function validar() {
 $this->load->model('ValidarModel'); //cargamos el modelo
 //Obtener datos de la tabla 'contacto'
 $administrativos = $this->ValidarModel->update(); //llamamos a la función getData() del modelo creado anteriormente.
 //load de vistas
 $this->load->view('Principal/Index'); //llamada a la vista, que crearemos posteriormente
 }

}
 
?>