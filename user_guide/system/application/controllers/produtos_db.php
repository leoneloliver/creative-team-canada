<?php
class Produtos_db extends Controller {

	function __construct()
	{
		parent::Controller();
		$this->load->scaffolding('produtos');	
	}
}
