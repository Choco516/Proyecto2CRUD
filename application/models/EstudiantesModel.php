
<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class EstudiantesModel extends CI_Model
{
    
    function __construct()
    {

    }
    
    //función para crear estudiantes
    public function Crear($estudiantes)
    {
        //$this->output->append_output(var_dump($cliente));
        if ($this->db->insert("estudiantes", $estudiantes)) {
            return true;
        } else {
            return false;
        }
    }
    
    //función para listar estudiantes
    public function ListaEstudiantes()
    {
        $query = $this->db->get('estudiantes');
        return $query->result_array();
    }
    
    //función para obtener estudiantes
    public function ObtenerEstudiantes($cedula)
    {
        $this->db->where('Cédula', $cedula);
        $query = $this->db->get('estudiantes');
        return $query->row();
    }
    
    //función para editar estudiantes
    public function Editar($cedula, $estudiantes)
    {
        var_dump($cedula);
        $this->db->where('Cédula', $cedula);
        if ($this->db->update('estudiantes', $estudiantes)) {
            return true;
        } else {
            return false;
        }
    }
    
    //función para eliminar estudiantes
    public function EliminarEstudiantes($cedula)
    {
        var_dump($cedula);
        $this->db->where('Cédula', $cedula);
        if ($this->db->delete('estudiantes')) {
            return true;
        } else {
            return false;
        }
    }
}