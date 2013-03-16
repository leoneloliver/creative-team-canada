<?php
class Produtos extends Controller {

	function __construct()
	{
		parent::Controller();
		$this->load->library('cart');	
	}
	
	/*
	* Exibindo os detalhes de um produto.
	*/
	function detalhe($id)
	{
		$this->load->helper('conversor_de_formatos');
		$query = $this->db->get('categorias'); 
		$dados['categorias'] = $query->result();  
		$dados['titulo'] = 'Cat&aacute;logo de produtos | Detalhes do Produto';
		$this->db->where('id', $id);
		$query = $this->db->get('produtos'); 
		$dados['detalhes_produto'] = $query->result();  
		$this->load->view('elementos/html_header',$dados);
		$this->load->view('elementos/produtos_categorias',$dados);
		$this->load->view('produto_detalhes',$dados);
		$this->load->view('elementos/html_footer');
	}
	
	/*
	* Exibindo os produtos contidos em uma categoria.
	*/
function categoria($id)
{
	$query = $this->db->get('categorias'); 
	$dados['categorias'] = $query->result();	
	$dados['titulo'] = 'Cat&aacute;logo de produtos | Produtos da Categoria';	
	$minha_query = "SELECT 
					produtos.*,
					categorias.nome as nome_categoria 
					FROM produtos 
					JOIN categorias 
					ON produtos.categoria = categorias.id
					WHERE produtos.categoria =".$id;
	
	$query = $this->db->query($minha_query);	
	$dados['produtos_categoria'] = $query->result();	
	$this->load->view('elementos/html_header',$dados);
	$this->load->view('elementos/produtos_categorias',$dados);
	$this->load->view('categoria_produtos',$dados);
	$this->load->view('elementos/html_footer');
}
	
function busca()
{
	$dados['paginas'] = NULL;
	$dados['titulo'] = 'Resultados da busca';
	
	$query = $this->db->get('categorias'); 
	$dados['categorias'] = $query->result();
	
	$this->db->like('nome', $this->input->post('busca'));
	$this->db->or_like('descricao', $this->input->post('busca'));
	
	$query = $this->db->get('produtos');		
	$dados['produtos'] = $query->result();
	
	$this->load->view('elementos/html_header',$dados);
	$this->load->view('elementos/produtos_categorias',$dados);
	if(count($dados['produtos'])>0){
		$this->load->view('produtos_home',$dados);
	}
	else{
		$dados['termo'] = $this->input->post('busca');
		$this->load->view('nao_encontrado',$dados);
	}
	$this->load->view('elementos/html_footer');
}
	
function tabela_de_categorias(){		
	$dados['titulo'] = 'Cat&aacute;logo de produtos | Tabela de Categorias';
	
	$query = $this->db->query("SELECT nome,descricao FROM categorias");
	
	$this->load->view('elementos/html_header',$dados);
	
	$this->load->library('table');
	$this->table->set_heading('Categoria', 'Descricao');
	$this->table->set_caption('Categorias');
	$this->table->set_empty('&nbsp;');
	echo $this->table->generate($query);
	
	$this->load->view('elementos/html_footer'); 
}
	
}
?>