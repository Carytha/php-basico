<?php /* o <? é a marcação do script de php */
$valor = $_GET['valor'];

if(!empty($_GET)) and $valor>200{

    echo "<h2>Produto de alto custo:</h2>"+ $valor;
else{
    echo "<h2>Produto de baixo custo:</h2>"+ $valor;

  
}
}

?>