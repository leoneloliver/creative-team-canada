<?php 
	echo doctype('xhtml1-trans');
?>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title><?php echo $titulo;?></title>
		<?php 
			echo link_tag('css/administracao.css');
			
			$meta = array(
		        array('name' => 'robots', 'content' => 'NOFOLLOW, NOINDEX'),
		        array('name' => 'Content-type', 'content' => 'text/html; charset=utf-8', 'type' => 'equiv')
	    	);
			echo meta($meta);
		?>
	</head>
	<body>