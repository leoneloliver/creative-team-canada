<?php
class Database extends Controller {

	function __construct()
	{
		parent::Controller();
	}
	
	function index()
	{	
		echo $this->db->platform(); 
		echo $this->db->version();
	
		
		$tabelas = $this->db->list_tables();
		foreach($tabelas as $tabela)
		{
			echo heading($tabela,3);
			echo "Registros ". $this->db->count_all($tabela) ."<br/>";			
		   	$campos = $this->db->field_data($tabela);
			foreach ($campos as $campo)
			{
			   $campos[$tabela][] = $campo->name ." - ". $campo->type;
			}
			echo ul($campos[$tabela]);
		} 	

		echo $this->db->last_query();
	}
	
	
function mostrar_produtos(){
	$query = $this->db->get('produtos');	
	$dados = $query->result();
	
	foreach ($dados as $linha)
	{
		echo $linha->id . " - " . $linha->nome . "<br/>";
	}
}

function mais_caro(){
	$this->load->helper('conversor_de_formatos');
	$this->db->order_by("preco", "desc"); 
	$query = $this->db->get('produtos',1);
	$dados = $query->result();
	if(count($dados)>0){
		echo heading("O produto mais caro desta loja é:",3);
		echo $dados[0]->nome . " - R$" . decimal_to_reaisbr($dados[0]->preco);
	}
}

function mostrar_categorias(){	
	
	$this->load->helper('conversor_de_formatos');	
	$this->db->select('categorias.nome AS nome_categoria');
	$this->db->from('categorias');
	$this->db->select('produtos.id as id_produto, produtos.nome AS nome_produto, produtos.preco AS preco_produto');
	$this->db->order_by("categorias.nome", "ASC"); 
	$this->db->join('produtos', 'produtos.categoria = categorias.id','left');
	$this->db->group_by("categorias.id"); 
	
	$query = $this->db->get();
	
	//echo $this->db->last_query();
	
	/*SELECT 
	`categorias`.`nome` AS nome_categoria, 
	`produtos`.`id` as id_produto, 
	`produtos`.`nome` AS nome_produto, 
	`produtos`.`preco` AS preco_produto 
	FROM (`categorias`) 
	LEFT JOIN `produtos` 
	ON `produtos`.`categoria` = `categorias`.`id` 
	GROUP BY `categorias`.`id` 
	ORDER BY `categorias`.`nome` ASC*/
	
	$dados = $query->result();
	
	foreach ($dados as $linha)
	{
		echo $linha->nome_categoria . " -> " . $linha->nome_produto . " - R$". decimal_to_reaisbr($linha->preco_produto) ."<br/>";
	}
}

}
?>