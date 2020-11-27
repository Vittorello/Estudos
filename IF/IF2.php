<?php

$didaDaSemana = date("w");

switch ($didaDaSemana) {

    case 0:
    echo "Domingo";
    break;

    case 1;
    echo "Segunda-Feira";
    break;

    case 2;
    echo "Terca-Feira";
    break;

    case 3;
    echo "Quarta-Feira";
    break;

    case 4;
    echo "Quinta-feira";
    break;

    case 5;
    echo "Sexta-feira";
    break;
    case 6;
    echo "Sabado";
    break;

    default:
    echo "Data Inválida!";
    break;
    
}


?>