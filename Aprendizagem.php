<?php 
//Funcao de variaveis '$'
$mensagem = '<strong>Hello World<strong>';
echo $mensagem;
?>

<br>

<?php
$funcionario = '<strong>Igor Camargo Vittorello<strong>';
echo $funcionario;

?>

<br>

<?php
//Concatenacao de variaveis '.'
$salario = '1400';
$cargo = 'Suporte';

$salariocargo = $cargo . "   " . $salario;
echo $salariocargo;

 ?>

<br>

<?php
//Conceito de array
$carros = array ("GOLF", "CAMARO", "FUSCA", "JETTA");
echo $carros[0];


?>

teste
<?php
//Nulo é quando não existe valor
//vazio é quando foi inciado, só nao tem informação
$nulo = NULL;
echo $nulo;

?>



<?php

$nome = $_GET["A"];
var_dump($nome);

?>
