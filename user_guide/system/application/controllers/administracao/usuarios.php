<?php
class Usuarios extends Controller {

	function __construct(){
		parent::Controller();	
	}
	
	function index(){
		$data['titulo'] = "Administra&ccedil;&atilde;o | Login";
		$this->load->view('administracao/elementos/html_header',$data);
		$this->load->view('administracao/elementos/menu');
		$this->load->view('administracao/elementos/html_footer');
	}

}
?>