<?php
class Categorias_db extends Controller {

	function __construct()
	{
		parent::Controller();
		$this->load->scaffolding('categorias');	
	}
}
