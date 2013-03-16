<?php
class Service extends Controller {

	function __construct(){
		parent::Controller();	
	}
	
	function index() {  
	
		$dados['titlepage'] = "Services Creative Team | Canada";
		$query = $this->db->get('service'); 
		$dados['service'] = $query->result();

		$query = $this->db->get('side_bar'); 
		$dados['sidebar'] = $query->result();

		$this->db->order_by("id", "random");
		$query = $this->db->get('item_home',4);
		$dados['itemhome'] = $query->result();



		$this->load->view('elementos/html_header',$dados);
		$this->load->view('service',$dados);
		$this->load->view('elementos/html_footer');
	

	}

	function detail($id)
	{
  
		$dados['titlepage'] = 'Services Creative Team';
		$this->db->where('id', $id);
		$query = $this->db->get('service'); 
		$dados['service'] = $query->result(); 

		$this->db->order_by("id", "random");
		$query = $this->db->get('item_home',4); 
		$dados['itemhome'] = $query->result();

		$this->load->view('elementos/html_header',$dados);
		$this->load->view('service_detail',$dados);
		$this->load->view('elementos/html_footer');
	}
	
	
}
?>