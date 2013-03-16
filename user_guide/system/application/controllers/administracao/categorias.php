<?php
class Categorias extends Controller {

	function __construct(){
		parent::Controller();
		$this->load->library('session');
        if(!$this->session->userdata('loggedin')){
            redirect(base_url().'administracao/home', 'refresh');
        }
	}
	
	function index(){
		$data['titulo'] = "Administra&ccedil;&atilde;o | Categorias";
		
		$this->load->model('administracao/categorias_model');
		$data['categorias'] = $this->categorias_model->listar();
		
		$this->load->view('administracao/elementos/html_header',$data);
		$this->load->view('administracao/elementos/menu');
		$this->load->view('administracao/categorias',$data);
		$this->load->view('administracao/elementos/html_footer');
	}
	
	function adicionar(){
		$this->load->library('form_validation');		
		$config = array(
	               array(
	                     'field'=>'nome',
	                     'label'=>'Nome',
	                     'rules'=>'required|min_length[4]|max_length[20]'
	                ),
					array(
	                     'field'   => 'descricao',
	                     'label'   => 'Descri&ccedil;&atilde;o',
	                     'rules'   => 'required| min_length[20]| max_length[100]| htmlspecialchars'
	                  )
           	 		);
           	 		$this->form_validation->set_rules($config);
		
		if($this->form_validation->run() == FALSE){
			$this->index();
		}
		else{
			 $data['nome'] = $this->input->post('nome');
			 $data['descricao'] = $this->input->post('descricao');
			 
			 $this->load->model('administracao/categorias_model');
			 if($this->categorias_model->cadastrar($data)){
			 	$this->index();
			 }
			 else{
			 	echo "Erro ao inserir categoria";
			 }
		}
	}
	
	
	function alterar($id){
		$data['titulo'] = "Administra&ccedil;&atilde;o | Alterar categoria";
		$this->load->model('administracao/categorias_model');
		$data['dados_categoria'] = $this->categorias_model->alterar($id);
		
		$this->load->view('administracao/elementos/html_header',$data);
		$this->load->view('administracao/elementos/menu');
		$this->load->view('administracao/alterar_categoria',$data);
		$this->load->view('administracao/elementos/html_footer');
	}
	
	function gravar_alteracao(){
	
		$this->load->library('form_validation');		
		$config = array(
	               array(
	                     'field'=>'nome',
	                     'label'=>'Nome',
	                     'rules'=>'required|min_length[4]|max_length[20]'
	                ),
					array(
	                     'field'   => 'descricao',
	                     'label'   => 'Descri&ccedil;&atilde;o',
	                     'rules'   => 'required| min_length[20]| max_length[100]| htmlspecialchars'
	                  )
           	 		);
           	 		$this->form_validation->set_rules($config);
		
		if($this->form_validation->run() == FALSE){
			$this->alterar($this->input->post('id'));
		}
		else{
			 $data['id'] = $this->input->post('id');
			 $data['nome'] = $this->input->post('nome');
			 $data['descricao'] = $this->input->post('descricao');
			 
			 $this->load->model('administracao/categorias_model');
			 if($this->categorias_model->gravar_alteracao($data)){
			 	redirect(base_url().'administracao/categorias/', 'refresh');
			 }
			 else{
			 	echo "Erro ao alterar categoria";
			 }
		}
	}
	
	function excluir($id){
		$this->load->model('administracao/categorias_model');
		if($this->categorias_model->excluir($id)){
			redirect(base_url().'administracao/categorias/', 'refresh');
		}
		else{
			echo "Erro ao excluir categoria";
		}
	}
}
?>