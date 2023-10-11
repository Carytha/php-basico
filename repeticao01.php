<?php
//estrutura de repetição while(enquanto)
//variável de controle
$cont = 0;
//Mostrar contagem iniciando em zero finalizando em 20
while($cont<=20){
    echo "$cont ";
    //incremento do contador
    $cont++; 
}
echo "<br>Valor final do contador: $cont";
echo "<hr>";

//Mostrar contagem iniciando em zero e finalizando em 100
//com incremento de 10 em 10
$cont = 0;

while($cont<=100){
    echo "$cont ";
    $cont +=10;
}

echo "<br>Valor final do contador: $cont";
//linha horizontal (hr)
echo "<hr>";

// Mostrar contagem descrescente iniciando em 20 até zero
$cont=20;
while($cont>=0){
    echo "$cont ";
    //decrementar -1 a cada laço do loop
    $cont--;
}

//Mostrar 100x a mensagem "Eu tenho que estudar!"
$cont = 1;
while($cont<=100){
    echo "<h5>$cont - Eu tenho que estudar!<h5/>";
    $cont++;
}

echo "<hr>";
//Defina duas variáveis ($a e $b) e mostre a contagem dos valores iniciando em 
//$a e finalizando em $b
$a = 10;
$b = 25;

while($a<=$b){
    echo "<h2>O valor de \$a é $a</h2>";
    $a++;
}
echo "<hr>";
//Mostrar uma contagem de 1 até 10 e ao final mostrar o somatório dos valores
//da contagem

$contador=1;
$soma = 0;
while ($contador<=10){
    $soma+=$contador;
    $contador++;

}
echo "<h3>O valor da soma dos contadores é $soma</h3>";
echo "<hr>";
//Defina duas variáveis ($a e $b) e mostre a contagem dos valores iniciando em 
//$a e finalizando em $b
//mostre somente os valores pares
$a = 10;
$b = 25;

while($a<=$b){
    if($a%2==0){
        echo "<h2>O valor de \$a é $a</h2>";
    }
    $a++;
}
echo "<hr>";







