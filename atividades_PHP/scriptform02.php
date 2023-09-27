<?php 
if(!empty($_GET)){
    $num01 = $_GET['num01'];
    $triplo = 3;
    $metade = 2; 
    $valor = 0;
    $valor = $num01 * $triplo;
    echo "O triplo é: $num01 * $triplo = $valor";
    echo "<br>O triplo é: $valor ";
    $valor = $num01 / $metade;
    echo "<br>A metade é: $num01 / $metade = $valor";
    echo "<br>A metade é: $valor";
    }
else{
    header('location:exercicio_form02.html');
}

echo "<h1>Fim do script!!!</h1>"
?>