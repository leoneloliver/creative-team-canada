<?php
class Client extends Controller {

	function __construct(){
		parent::Controller();	
	}
	
	function index() {  
	
		$dados['titlepage'] = "Clients - Creative Team | Canada";
		$this->db->order_by("id", "random");
		$query = $this->db->get('client'); 
		$dados['client'] = $query->result();

		$this->load->view('elementos/html_header',$dados);
		$this->load->view('client',$dados);
		$this->load->view('elementos/html_footer');
	

	}
	
	
}
?>