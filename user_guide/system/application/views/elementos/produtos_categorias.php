<?php
echo "<div id='sidebar'>";
echo "<h2 class='bg1'>Menu</h2>";
echo "<div id='menu-categorias'>"; 
  echo anchor(base_url(),"HOME");
  echo br();
  echo anchor(base_url().'contato',"CONTATO");
  echo br(2);
 
  echo form_open(base_url().'produtos/busca');
  echo form_input('busca');
  echo form_submit('mysubmit', 'Buscar!');
  echo form_close();
  echo br();
 
 
  echo "<h2 class='bg3'>Categoria</h2>";
  foreach($categorias as $categoria):    
   $lista[] = anchor(base_url() . "produtos/categoria/". $categoria->id, $categoria->nome);
  endforeach;
  echo ul($lista);
    
echo "</div>";
echo "</div>";
?>