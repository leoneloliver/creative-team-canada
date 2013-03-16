<?php 
	echo doctype('xhtml1-trans');
?>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title><?php echo $titulo;?></title>
		<!-- Arquivos utilizados pelo jQuery lightBox plugin -->
	       <script type="text/javascript" src="<?=base_url()?>/js/jquery.js"></script>
	       <script type="text/javascript" src="<?=base_url()?>/js/jquery.lightbox-0.5.js"></script>
	       <!-- / fim dos arquivos utilizados pelo jQuery lightBox plugin -->
		<?php 
			echo link_tag('css/default.css');
			echo link_tag('css/lightbox.css');
			$meta = array(
		        array('name' => 'robots', 'content' => 'no-cache'),
		        array('name' => 'description', 'content' => 'Descrição do website'),
		        array('name' => 'keywords', 'content' => 'palavra1, palavra2, palavra3'),
		        array('name' => 'robots', 'content' => 'no-cache'),
		        array('name' => 'Content-type', 'content' => 'text/html; charset=utf-8', 'type' => 'equiv')
	    	);
			echo meta($meta);
		?>
		
		<!-- Ativando o jQuery lightBox plugin -->
		<script>
		$(function() {
			$('#gallery a').lightBox();
		    });
		</script>
		
	</head>
	<body>
	<div id="header">
	<h1><a href="<?=base_url()?>">Mix tech</a></h1>
	<p><a href="#/">Produtos em Geral</a></p>
</div>
<div id="page">
<!-- end header -->