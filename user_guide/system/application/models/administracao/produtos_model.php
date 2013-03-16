<?php
class Produtos_model extends Model {

    function __construct(){
        parent::Model();
    }
    
    function cadastrar($data){
    	return $this->db->insert('produtos',$data);
    }
    
    function listar(){
    	$query = $this->db->get('produtos');
    	return $query->result();
    }
    
	function alterar($id){
		$this->db->where('id',$id);
    	return $this->db->get('produtos');
    }
    
    function gravar_alteracao($data){
    	$this->db->where('id',$data['id']);
    	return $this->db->update('produtos',$data);
    }
    
	function excluir($id){
    	$this->db->where('id',$id);
    	return $this->db->delete('produtos');
    }
    
    function listar_dados_produto($id){
    	$this->db->where('id',$id);    	
		$query = $this->db->get('produtos');
    	return $query->result();
    }
}
?>