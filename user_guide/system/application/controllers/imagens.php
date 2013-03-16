<?php

class Imagens extends Controller {

	function __construct()
	{
		parent::Controller();	
	}
	
	function index()
	{
		echo heading("Manipulando imagens",3);
		echo img('imgs/gato.jpg');
	}
	
	function redimensionar()
	{
		$config['image_library'] = 'gd2';
		$config['source_image'] = './imgs/gato.jpg';
		$config['create_thumb'] = TRUE;
		$config['maintain_ratio'] = TRUE;
		$config['width'] = 120;
		$config['height'] = 90;
		
		$this->load->library('image_lib', $config);
		
		if($this->image_lib->resize()){
			echo heading("Criando uma miniatura imagens",3);
			echo img('imgs/gato.jpg');
			echo img('imgs/gato_thumb.jpg');
		}
	}

	function girar()
	{
		$config['image_library'] = 'gd2';
		$config['source_image'] = './imgs/gato.jpg';
		$config['rotation_angle'] = '180';
		
		$this->load->library('image_lib', $config);
		
		if($this->image_lib->rotate()){
			echo heading("Rotacionando a imagem",3);
			echo img('imgs/gato.jpg');
		}
	}
	
/*function marcadagua()
{
	$config['image_library'] = 'gd2';		
	$config['source_image'] = './imgs/gato.jpg';
	$config['wm_text'] = 'CodeIgniter é fácil';
	$config['wm_type'] = 'text';
	$config['wm_font_path'] = './system/fonts/MisterEarlBT.ttf';
	$config['wm_font_size'] = '36';
	$config['wm_font_color'] = 'ffffff';
	$config['wm_vrt_alignment'] = 'bottom';
	$config['wm_hor_alignment'] = 'right';
	$config['wm_hor_offset'] = 0;
	$config['wm_vrt_offset'] = -20;
	
	$this->load->library('image_lib', $config);
	
	if($this->image_lib->watermark()){
		echo heading("Adicionando uma marca d'água a imagem",3);
		echo img('imgs/gato.jpg');
	}
}*/

function marcadagua()
{
	$config['image_library'] = 'gd2';		
	$config['source_image'] = './imgs/gato.jpg';	
	$config['wm_type'] = 'overlay';
	$config['wm_overlay_path'] = './imgs/ci_logo.png';
	$config['wm_opacity'] = 15;
	$config['wm_vrt_alignment'] = 'bottom';
	$config['wm_hor_alignment'] = 'right';
	$config['wm_hor_offset'] = 20;
	$config['wm_vrt_offset'] = 20;
	
	$this->load->library('image_lib', $config);
	
	if($this->image_lib->watermark()){
		echo heading("Adicionando uma marca d'água a imagem",3);
		echo img('imgs/gato.jpg');
	}
}

}
?>