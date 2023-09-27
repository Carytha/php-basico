<?php 
if(!empty($_GET)){
    $num01 = $_GET['num01'];
    if ($num01 == 0) {
       echo "O número $num01 é neutro ";
    } elseif ($num01 > 0) {
       echo "<br>O número $num01 é positivo ";
    }   
    else {
        echo "<br>O número $num01 é negativo ";
    }
}

echo "<h1>Fim do script!!!</h1>"
?>