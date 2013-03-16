<div id="content">
<?php
echo "<div id='produtos-detalhe'>";
  foreach($detalhes_produto as $detalhe):
   echo heading($detalhe->nome, 3); 
  
   echo heading("R$".decimal_to_reaisbr($detalhe->preco), 4);
   echo "<p>" . $detalhe->descricao . "</p>";
   echo "<div id='gallery'>";
   echo "<a href='../../imgs/".$detalhe->foto."' title='".$detalhe->nome."'>".img("imgs/".$detalhe->foto)."</a>";
   echo "</div>";
  endforeach;
echo "</div>";
?>
</div>