<?php
class About extends Controller {

	function __construct(){
		parent::Controller();	
	}
	
	function index() {  
	
		$dados['titlepage'] = "About-us - Creative Team | Canada";
		$query = $this->db->get('home_text'); 
		$dados['home'] = $query->result();

		$query = $this->db->get('side_bar'); 
		$dados['sidebar'] = $query->result();

		$this->db->order_by("id", "random");
		$query = $this->db->get('item_home',4);
		$dados['itemhome'] = $query->result();



		$this->load->view('elementos/html_header',$dados);
		$this->load->view('About',$dados);
		$this->load->view('elementos/html_footer');
	

	}
	
	
}
?>