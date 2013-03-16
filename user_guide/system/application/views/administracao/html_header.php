<?php 
	echo doctype('xhtml1-trans');
?>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title><?php echo $titulo;?></title>
		<?php 
			echo link_tag('css/default.css');
			
			$meta = array(
		        array('name' => 'robots', 'content' => 'no-cache'),
		        array('name' => 'description', 'content' => 'Descrição do website'),
		        array('name' => 'keywords', 'content' => 'palavra1, palavra2, palavra3'),
		        array('name' => 'robots', 'content' => 'no-cache'),
		        array('name' => 'Content-type', 'content' => 'text/html; charset=utf-8', 'type' => 'equiv')
	    	);
			echo meta($meta);
		?>
	</head>
	
	<body>
	<div id="header">
	<h1><a href="#">Canvass</a></h1>
	<p>By <a href="http://www.freecsstemplates.org/">Free CSS Templates</a></p>
</div>
<!-- end header -->