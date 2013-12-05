
<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class ProfesoresModel extends CI_Model
{
    
    function __construct()
    {
        
    }
    
    //función para crear profesores
    public function Crear($profesores)
    {
        if ($this->db->insert("profesores", $profesores)) {
            return true;
        } else {
            return false;
        }
    }
    
    //función para listar profesores
    public function ListaProfesores()
    {
        $query = $this->db->get('profesores');
        return $query->result_array();
    }
    
    //función para obtener profesores
    public function ObtenerProfesores($cedula)
    {
        $this->db->where('Cédula', $cedula);
        $query = $this->db->get('profesores');
        return $query->row();
    }
    
    //función para editar profesores
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
    
    //función para eliminar profesores
    public function EliminarProfesores($cedula)
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