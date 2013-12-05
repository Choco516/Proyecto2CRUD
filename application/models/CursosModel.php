
<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class CursosModel extends CI_Model
{
    
    function __construct()
    {
        
    }
    
    //función para crear cursos
    public function Crear($cursos)
    {
        //$this->output->append_output(var_dump($cliente));
        if ($this->db->insert("cursos", $cursos)) {
            return true;
        } else {
            return false;
        }
    }
    
    //función para listar cursos
    public function ListaCursos()
    {
        $query = $this->db->get('cursos');
        return $query->result_array();
    }
    
    //función para obtener cursos
    public function ObtenerCursos($id_curso)
    {
        $this->db->where('id_curso', $id_curso);
        $query = $this->db->get('cursos');
        return $query->row();
    }
    
    //función para editar cursos
    public function EditarCursos($id_curso, $cursos)
    {
        var_dump($id_curso);
        $this->db->where('Id_Curso', $id_curso);
        if ($this->db->update('cursos', $cursos)) {
            return true;
        } else {
            return false;
        }
    }
    
    //función para eliminar cursos
    public function EliminarCursos($id_curso)
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