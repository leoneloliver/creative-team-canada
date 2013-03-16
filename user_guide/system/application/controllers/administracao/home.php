<?php
class Home extends Controller {

	function __construct(){
		parent::Controller();	
	}
	
	function index(){
		$data['titulo'] = "Administra&ccedil;&atilde;o | Login";
		$this->load->view('administracao/elementos/html_header',$data);
		$this->load->view('administracao/login');
		$this->load->view('administracao/elementos/html_footer');
	}

function usuarios(){
		echo "foi";	}

	
	function login(){
		$this->load->library('form_validation');		
		$config = array(
	               array(
	                     'field'=>'login',
	                     'label'=>'Login',
	                     'rules'=>'required|min_length[4]|max_length[10]| htmlspecialchars'
	               ),
					array(
	                     'field'   => 'senha',
	                     'label'   => 'Senha',
	                     'rules'   => 'required| min_length[4]| max_length[10]| htmlspecialchars'
	               )
           	 	);
        $this->form_validation->set_rules($config);
		
		if($this->form_validation->run() == FALSE){
			$this->index();
		}
		else{
			
			$data['login'] = $this->input->post('login');
			$data['senha'] = $this->input->post('senha');			 
			
			$this->load->model('administracao/usuarios_model');
			$login = $this->usuarios_model->login($data);
			
			if(count($login)>0){
				
				$newdata = array(
					'nome_usuario' => $login[0]->nome,
                   	'usuario'  => $data['login'],
                   	'loggedin' => TRUE
				);
				
				
				$this->load->library('session');
				$this->session->set_userdata($newdata);
				redirect(base_url().'administracao/produtos', 'refresh');
			}
			else{
				$this->index();
			}
		}
	}

	
	function logout(){
		$this->load->library('session');
		$this->session->sess_destroy();
		$this->index();
	}
}
?>