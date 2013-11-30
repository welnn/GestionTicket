<?php
    
class ModelUsuario extends CI_Model {
    function ModelUsuario()
    {
        parent::__construct();
    }
    
    function getUsuarios()
    {
        
        $this->db->where('Estado =', 'A');
        $this->db->where('UsuarioPerfil =', 'US');
        $this->db->order_by("UltimoLogin", "desc");
        $query = $this->db->get('Usuario');
        
        if ($query->num_rows()>0)
        {
            return $query->result();
        }else{
            show_error('Database is empty!');
        }
        
    }
}
?>
