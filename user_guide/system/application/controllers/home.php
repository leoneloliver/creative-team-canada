<?php
class Home extends Controller {

	function __construct(){
		parent::Controller();	
	}
	
	function index($offset=1) {  
		$this->load->library('pagination');
		$dados['titulo'] = 'Cat&aacute;logo de produtos | Home';
		  
		$query = $this->db->get('categorias'); 
		$dados['categorias'] = $query->result();
		 
		$query = $this->db->get('produtos',4,$offset);
		$dados['produtos'] = $query->result();
				  
		$config['base_url'] = base_url() .'home/index/';
		$config['total_rows'] = $this->db->count_all('produtos');
		$config['per_page'] = '4';
		$config['first_link'] = 'In&iacute;cio';
		$config['last_link'] = 'Fim';
		$this->pagination->initialize($config);
		$dados['paginas'] = $this->pagination->create_links();
		 
		$this->load->view('elementos/html_header',$dados);
		$this->load->view('elementos/produtos_categorias',$dados);
		$this->load->view('produtos_home',$dados);  
		$this->load->view('elementos/html_footer');
	}
	
	function produtos($offset=1){		
		$this->load->library('pagination');
		$query = $this->db->get('produtos',4,$offset);
		$dados['produtos'] = $query->result();
		$config['base_url'] = base_url() .'home/produtos/';
		$config['total_rows'] = $this->db->count_all('produtos');
		$config['per_page'] = '4';
		$config['first_link'] = 'In&iacute;cio';
		$config['last_link'] = 'Fim';
		$this->pagination->initialize($config);
		$dados['paginas'] = $this->pagination->create_links();
		$this->load->view('produtos_home',$dados);		
	}
}
?>