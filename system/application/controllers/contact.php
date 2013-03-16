<?php
class Contact extends Controller {

	function __construct(){
		parent::Controller();	
	}
	
	function index() {  
	
		$dados['titlepage'] = "Contact us Creative Team | Canada";

		$this->load->view('elementos/html_header',$dados);
		$this->load->view('contact',$dados);
		$this->load->view('elementos/html_footer');
	

	}
	
	
}
?>