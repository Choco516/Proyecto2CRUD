
<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class AdministrativosModel extends CI_Model
{
    
    function __construct()
    {
        
    }
    
    //función para crear administrativos
    public function Crear($administrativos)
    {
        if ($this->db->insert("administrativos", $administrativos)) {
            return true;
        } else {
            return false;
        }
    }
    
    //función para listar administrativos
    public function ListaAdministrativos()
    {
        $query = $this->db->get('administrativos');
        return $query->result_array();
    }
    
    //función para obtener administrativos
    public function ObtenerAdministrativos($cedula)
    {
        $this->db->where('cédula', $cedula);
        $query = $this->db->get('administrativos');
        return $query->row();
    }
    
    //función para editar administrativos
    public function Editar($cedula, $administrativos)
    {
        var_dump($cedula);
        $this->db->where('Cédula', $cedula);
        if ($this->db->update('administrativos', $administrativos)) {
            return true;
        } else {
            return false;
        }
    }
    
    //función para eliminar administrativos
    public function EliminarAdministrativos($cedula)
    {
        var_dump($cedula);
        $this->db->where('Cédula', $cedula);
        if ($this->db->delete('administrativos')) {
            return true;
        } else {
            return false;
        }
    }
}