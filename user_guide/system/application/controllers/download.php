<?php

class Download extends Controller {

	function __construct()
	{
		parent::Controller();	
	}
	
function index()
{
	$this->load->helper('download');
	$data = file_get_contents("./imgs/gato.jpg");
	$nome_arquivo = 'arquivo.jpg';

	force_download($nome_arquivo, $data); 
}

function listar(){
	$this->load->helper('directory');
	$arquivos_pasta = directory_map('./imgs/');
	foreach($arquivos_pasta as $arquivo){
		echo $arquivo."<br/>";
	}
}

function ler_arquivo(){
	$this->load->helper('file');
	$data = read_file('./texto.txt');
	echo $data;
}

function mostrar_permissao(){
	$this->load->helper('file');
	echo octal_permissions(fileperms('./imgs/gato.jpg'));
}


}
?>