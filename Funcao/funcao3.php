<?php

$data = array(

    'Aniversário' =>'29 de Agosto',
    'idade'=> 'Idade 20'
);

foreach ($data as &$value) {

    if (gettype($value) === 'integer') $value += 10;
   
    echo $value . '<br>';

}

print_r($data);

?>
