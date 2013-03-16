<?php
echo "<div id='produtos-detalhe'>";
    echo heading("Nada encontrado",3);
    echo "Nenum resultado encontrado com o termo pesquisado: <b>".$termo."</b>.";
    echo br(2);
    echo "<a href='javascript:history.back();'>voltar</a> | <a href='".base_url()."'>home</a>";
echo "</div>"    
?>