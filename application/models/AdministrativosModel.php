
<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class AdministrativosModel extends CI_Model
{
    
    function __construct()
    {
        
        //$query = $this->db->get('cliente');
        // $this->output->append_output(var_dump($query));
        
    }
    
    public function Crear($administrativos)
    {
        //$this->output->append_output(var_dump($cliente));
        if ($this->db->insert("administrativos", $administrativos)) {
            return true;
        } else {
            return false;
        }
    }
    
    public function ListaAdministrativos()
    {
        $query = $this->db->get('administrativos');
        return $query->result_array();
    }
    
    public function ObtenerAdministrativos($cedula)
    {
        $this->db->where('cédula', $cedula);
        $query = $this->db->get('administrativos');
        return $query->row();
    }
    
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
    
    public function Eliminar($cedula)
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