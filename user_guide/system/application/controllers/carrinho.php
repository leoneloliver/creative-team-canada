<?php
class Carrinho extends Controller {

	function __construct()
	{
		parent::Controller();
	}
		
	function index(){
		$this->load->helper('conversor_de_formatos');
		$query = $this->db->get('categorias'); 
		$dados['categorias'] = $query->result();
		$dados['titulo'] = "Cat&aacute;logo de produtos | Carrinho de compras."; 
		$this->load->view('elementos/html_header',$dados);
		$this->load->view('elementos/produtos_categorias',$dados);
		$this->load->view('carrinho');
		$this->load->view('elementos/html_footer');
	}
		
	function adicionar() {
		$data = array(
		'id' => $this->input->post('id'),
		'qty' => $this->input->post('qty'),
		'price' => $this->input->post('price'),
		'name' => $this->input->post('name')
		);
		$this->cart->insert($data);
		redirect(base_url().'produtos/detalhe/'.$this->input->post('id'), 'refresh');
	}
		
	function atualizar(){
		$this->cart->update($_POST);
		$this->index();
	}
}
?>