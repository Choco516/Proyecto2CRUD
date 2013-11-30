
<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class ProfesoresModel extends CI_Model
{
    
    function __construct()
    {
        
        //$query = $this->db->get('cliente');
        // $this->output->append_output(var_dump($query));
        
    }
    
    public function Crear($profesores)
    {
        //$this->output->append_output(var_dump($cliente));
        if ($this->db->insert("profesores", $profesores)) {
            return true;
        } else {
            return false;
        }
    }
    
    public function ListaProfesores()
    {
        $query = $this->db->get('profesores');
        return $query->result_array();
    }
    
    public function ObtenerProfesores($cedula)
    {
        $this->db->where('Cédula', $cedula);
        $query = $this->db->get('profesores');
        return $query->row();
    }
    
    public function Editar($cedula, $profesores)
    {
        var_dump($cedula);
        $this->db->where('Cédula', $cedula);
        if ($this->db->update('profesores', $profesores)) {
            return true;
        } else {
            return false;
        }
    }
    
    public function Eliminar($cedula)
    {
        var_dump($cedula);
        $this->db->where('Cédula', $cedula);
        if ($this->db->delete('profesores')) {
            return true;
        } else {
            return false;
        }
    }
}