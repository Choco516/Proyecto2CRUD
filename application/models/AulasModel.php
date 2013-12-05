
<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class AulasModel extends CI_Model
{
    
    function __construct()
    {
        
    }
    
    //función para crear aulas
    public function Crear($aulas)
    {
        //$this->output->append_output(var_dump($cliente));
        if ($this->db->insert("aulas", $aulas)) {
            return true;
        } else {
            return false;
        }
    }
    
    //función para listar aulas
    public function ListaAulas()
    {
        $query = $this->db->get('aulas');
        return $query->result_array();
    }
    
    //función para obtener aulas
    public function ObtenerAulas($codigo)
    {
        $this->db->where('codigo', $codigo);
        $query = $this->db->get('aulas');
        return $query->row();
    }
    
    //función para editar aulas
    public function Editar($codigo, $aulas)
    {
        var_dump($codigo);
        $this->db->where('Codigo', $codigo);
        if ($this->db->update('aulas', $aulas)) {
            return true;
        } else {
            return false;
        }
    }
    
    //función para eliminar aulas
    public function EliminarAulas($codigo)
    {
        var_dump($codigo);
        $this->db->where('Codigo', $codigo);
        if ($this->db->delete('aulas')) {
            return true;
        } else {
            return false;
        }
    }
}