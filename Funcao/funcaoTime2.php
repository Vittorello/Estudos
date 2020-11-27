<?php

$B = "Bom dia, hoje é: ";
echo $B;

setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8", "portuguese");

$ts = strtotime("now ");

echo ucwords (strftime("%A %B "));

echo date("d", $ts);

?>

<br>


<?php


$dt = new DateTime();

$periodo = new DateInterval ("P15D");

$dt->add($periodo);

echo $dt->format("d/m/Y H:i:s");


?>
