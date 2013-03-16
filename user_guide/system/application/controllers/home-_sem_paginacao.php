<?php
class Home extends Controller {
	function __construct()
	{
		parent::Controller();	
	}
	function index()
	{
		$dados['titulo'] = "Cat�logo de Produtos | Home";
		$query = $this->db->get('categorias'); 
		$dados['categorias'] = $query->result();	
		$this->db->order_by("id","random");
		$query = $this->db->get("produtos",8);
		$dados['produtos'] = $query->result();
		$this->load->view('elementos/html_header',$dados);
		$this->load->view('elementos/produtos_categorias',$dados);
		$this->load->view('produtos_home',$dados);
		$this->load->view('elementos/html_footer');
	}
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */