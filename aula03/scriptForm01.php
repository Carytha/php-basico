<?php /* o <? é a marcação do script de php */
if(!empty($_POST)){
    // echo "Tem post";
    // echo var_dump($_POST);
    $nome = $_POST['nome']; /*uso o Post porque no form1 eu defini um submit*/
    $idade = $_POST['idade'];
    echo $nome."<br>".$idade;
    if($idade>=18){
    echo "<h2>Maior de idade</h2>";

}else{
    echo "<h2>Menor de idade</h2>";
}
}else{
    header('location:form1.html'); /*retorna para o formulário*/
}
echo "<h2>Fim de script</h2>"






?>