
<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class EstudiantesModel extends CI_Model
{
    
    function __construct()
    {
        
        //$query = $this->db->get('cliente');
        // $this->output->append_output(var_dump($query));
        
    }
    
    public function Crear($estudiantes)
    {
        //$this->output->append_output(var_dump($cliente));
        if ($this->db->insert("estudiantes", $estudiantes)) {
            return true;
        } else {
            return false;
        }
    }
    
    public function ListaEstudiantes()
    {
        $query = $this->db->get('estudiantes');
        return $query->result_array();
    }
    
    public function ObtenerEstudiantes($cedula)
    {
        $this->db->where('Cédula', $cedula);
        $query = $this->db->get('estudiantes');
        return $query->row();
    }
    
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
    
    public function Eliminar($cedula)
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