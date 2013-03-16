<?php
class Project extends Controller {

	function __construct(){
		parent::Controller();	
	}
	
	function index() {  
	
		$dados['titlepage'] = "Projects Creative Team | Canada";

		$this->db->order_by("id", "random");
		$query = $this->db->get('item_home'); 
		$dados['itemhome'] = $query->result(); 

		$this->load->view('elementos/html_header',$dados);
		$this->load->view('project',$dados);
		$this->load->view('elementos/html_footer');
	

	}
	
	
}
?>