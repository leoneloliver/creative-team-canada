<?php
class Produtos extends Controller {

	function __construct(){
		parent::Controller();
		$this->load->library('session');
        if(!$this->session->userdata('loggedin')){
            redirect(base_url().'administracao/home', 'refresh');
        }
		$this->load->helper('conversor_de_formatos');
	}
	
	function index(){
		$data['titulo'] = "Administra&ccedil;&atilde;o | Produtos";
		$this->load->model('administracao/categorias_model');
		$data['categorias'] = $this->categorias_model->listar();
		$data['produtos'] = $this->listar();		
		$this->load->view('administracao/elementos/html_header',$data);
		$this->load->view('administracao/elementos/menu');
		$this->load->view('administracao/produtos',$data);
		$this->load->view('administracao/elementos/html_footer');
	}
	
	function cadastrar(){
		$this->load->library('form_validation');
		$validacoes = array(
						array('field'=>'categoria','label'=>'Categoria','rules'=>'required|min_length[1]'),
						array('field'=>'nome','label'=>'Nome','rules'=>'required|min_length[5]'),
						array('field'=>'preco','label'=>'Pre&ccedil;o','rules'=>'required|min_length[4]'),
						array('field'=>'descricao','label'=>'Descri&ccedil;&atilde;o','rules'=>'required|min_length[15]')		                
					);
		
        $this->form_validation->set_rules($validacoes);
		if($this->form_validation->run() == FALSE){
			$this->index();
		}
		else{
			$config['upload_path'] = 'imgs';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size']	= 0;
			$config['max_width']  = 0;
			$config['max_height']  = 0;
			$config['encrypt_name'] = TRUE;
			$this->load->library('upload', $config);
			if(!$this->upload->do_upload()){
				echo $this->upload->display_errors();
			}	
			else{
				$arquivo_enviado = $this->upload->data();
				$data['foto'] = $arquivo_enviado['file_name'];
				
				$data['categoria'] = $this->input->post('categoria');
				$data['nome'] = $this->input->post('nome');
		    	$data['preco'] = reaisbr_to_decimal($this->input->post('preco'));
		    	$data['descricao'] = $this->input->post('descricao');
		    	$this->load->model('administracao/produtos_model');
				
		    	if($this->produtos_model->cadastrar($data)){
			 		$this->index();
			 	}
			 	else{
			 		echo "Erro ao cadastrar produto";
			 	}
			}
		}
	}
	
	function listar(){
		$this->load->model('administracao/produtos_model');
		return $this->produtos_model->listar();	
	}
	
	private function dados_produto($id){
		$this->load->model('administracao/produtos_model');
		return $this->produtos_model->listar_dados_produto($id);
	}
	
	function alterar($id){
		$data['titulo'] = "Administra&ccedil;&atilde;o | Alterar Produto";
		
		$this->load->model('administracao/categorias_model');
		$data['categorias'] = $this->categorias_model->listar();
		$data['produtos'] = $this->listar();
		
		$data['dados_produto'] = $this->dados_produto($id);		
		
		$this->load->view('administracao/elementos/html_header',$data);
		$this->load->view('administracao/elementos/menu');
		$this->load->view('administracao/alterar_produto',$data);
		$this->load->view('administracao/elementos/html_footer');
		
	}
	
	function gravar_alteracao(){		
		if($_FILES['userfile']['size'] > 0){
			$config['upload_path'] = 'imgs';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size']	= 0;
			$config['max_width']  = 0;
			$config['max_height']  = 0;
			$config['encrypt_name'] = TRUE;
			$this->load->library('upload', $config);
			if($this->upload->do_upload()){
				$foto_antiga = $this->dados_produto($this->input->post('id'));
				unlink('./imgs/'.$foto_antiga[0]->foto);
				$arquivo_enviado = $this->upload->data();
				$data['foto'] = $arquivo_enviado['file_name'];
			}
		}
		
		$this->load->library('form_validation');
		$validacoes = array(
						array('field'=>'categoria','label'=>'Categoria','rules'=>'required|min_length[1]'),
						array('field'=>'nome','label'=>'Nome','rules'=>'required|min_length[5]'),
						array('field'=>'preco','label'=>'Pre&ccedil;o','rules'=>'required|min_length[4]'),
						array('field'=>'descricao','label'=>'Descri&ccedil;&atilde;o','rules'=>'required|min_length[15]')		                
					);
		
        $this->form_validation->set_rules($validacoes);
		if($this->form_validation->run() == FALSE){
			$this->alterar($this->input->post('id'));
		}
		else{
				
			$data['id'] = $this->input->post('id');
			$data['categoria'] = $this->input->post('categoria');
			$data['nome'] = $this->input->post('nome');
	    	$data['preco'] = reaisbr_to_decimal($this->input->post('preco'));
	    	$data['descricao'] = $this->input->post('descricao');
	    	$this->load->model('administracao/produtos_model');
	    	
	    	if($this->produtos_model->gravar_alteracao($data)){
		 		$this->index();
		 	}
		 	else{
		 		echo "Erro ao alterar produto";
		 	}
		}
	}
	
	function excluir($id){
		$foto_excluir = $this->dados_produto($id);
		if(unlink('imgs/'.$foto_excluir[0]->foto)){
			$this->load->model('administracao/produtos_model');
			if($this->produtos_model->excluir($id)){
				$this->index();
			}
			else{
				echo "Erro ao excluir produto.";
			}
		}
		else{
			echo "Erro ao excluir imagem de produto.";
		}
	}
}
?>