<?php
//escopos
$nome = "Igor";
function teste () {

global $nome;  
    echo $nome;

}

teste();
?>

<br>

<?php
//Operadores
$nome = "Rafael<br>";

echo $nome . " Gerente<br>";

$nome .=  "Tecnologia da Informacao<br>";

echo $nome;

?>


<?php
//Operadores\\
$valortotal = 0;

$valortotal += 100;

$valortotal += 25;

$valortotal *= .9;

echo $valortotal;

?>

<br>


<?php

$a = 65;
$b = 55;

var_dump($a > $b);

echo "<br>";

var_dump($a < $b);

echo "<br>";
//comparação "=="
var_dump($a == $b);

?>

<br>

<?php
// operadores nulos
$a = NULL;

$b = NULL;

$c = 95;

echo $a ?? $b ?? $c;

?>

<br>

<?php

$a = 10;

echo $a++;


?>