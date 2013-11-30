
<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class CursosModel extends CI_Model
{
    
    function __construct()
    {
        
        //$query = $this->db->get('cliente');
        // $this->output->append_output(var_dump($query));
        
    }
    
    public function Crear($cursos)
    {
        //$this->output->append_output(var_dump($cliente));
        if ($this->db->insert("cursos", $cursos)) {
            return true;
        } else {
            return false;
        }
    }
    
    public function ListaCursos()
    {
        $query = $this->db->get('cursos');
        return $query->result_array();
    }
    
    public function ObtenerCursos($id_curso)
    {
        $this->db->where('id_curso', $id_curso);
        $query = $this->db->get('cursos');
        return $query->row();
    }
    
    public function Editar($id_curso, $cursos)
    {
        var_dump($id_curso);
        $this->db->where('Id_Curso', $id_curso);
        if ($this->db->update('cursos', $cursos)) {
            return true;
        } else {
            return false;
        }
    }
    
    public function Eliminar($id_curso)
    {
        var_dump($id_curso);
        $this->db->where('Id_Curso', $id_curso);
        if ($this->db->delete('cursos')) {
            return true;
        } else {
            return false;
        }
    }
}