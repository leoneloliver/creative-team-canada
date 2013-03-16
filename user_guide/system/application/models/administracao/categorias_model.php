<?php
class Categorias_model extends Model {

    function __construct(){
        parent::Model();
    }
    
    function cadastrar($data){
    	return $this->db->insert('categorias',$data);
    }
    
    function listar(){
    	$query = $this->db->get('categorias');
    	return $query->result();
    }
    
	function alterar($id){
		$this->db->where('id',$id);
    	$query = $this->db->get('categorias');
    	return $query->result();
    }
    
    function gravar_alteracao($data){
    	$this->db->where('id',$data['id']);
    	return $this->db->update('categorias',$data);
    }
    
	function excluir($id){
    	$this->db->where('id',$id);
    	return $this->db->delete('categorias');
    }
}
?>