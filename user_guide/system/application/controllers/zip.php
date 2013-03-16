<?php
class Zip extends Controller {

	function __construct()
	{
		parent::Controller();	
	}
	
function compactar()
{
	$this->load->library('zip');
	$this->zip->read_file('./imgs/gato.jpg');
	$this->zip->archive('./backup/backup_images.zip');
	$this->zip->download('backup_images.zip');
}
}
?>