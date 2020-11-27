<?php

function ola($texto = "mundo"){

    return "Olá $texto!<br>";


}

    echo ola();
    echo ola("Igor");
    echo ola("Rafael");

?>


<br>

<?php

$a = 15;
function trocaValor(&$a){

    $a += 50;

    return $a;

}

echo trocaValor($a);
echo "<br>";
echo $a;


?>