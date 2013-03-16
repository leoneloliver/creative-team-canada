<?php

class Cadastra_cliente extends Controller {

	function __construct()
	{
		parent::Controller();
		$this->load->scaffolding('client');	
	}
	
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */