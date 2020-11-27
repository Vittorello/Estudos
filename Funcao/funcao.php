<?php

function ola(){

    return "Olá Mundo!<br>";

}

echo ola();
$frase = ola();

echo strlen ($frase);

?>

<br>

<?php

function salario(){

    return 946.00;
}

echo "Igor recebeu 2 salarios"  .(salario()*2);

?>