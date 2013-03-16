<?php
class Product extends Controller {

	function __construct()
	{
		parent::Controller();
	}
	
	/*
	* Exibindo os detalhes de um produto.
	*/
	function detail($id)
	{
  
		$dados['titlepage'] = 'Products Creative Team';
		$this->db->where('id', $id);
		$query = $this->db->get('item_home'); 
		$dados['produtct'] = $query->result(); 

		$this->db->order_by("id", "random");
		$query = $this->db->get('item_home',4); 
		$dados['itemhome'] = $query->result();

		$this->load->view('elementos/html_header',$dados);
		$this->load->view('product_detail',$dados);
		$this->load->view('elementos/html_footer');
	}
	
	/*
	* Exibindo os produtos contidos em uma categoria.
	*/
	
}
?>