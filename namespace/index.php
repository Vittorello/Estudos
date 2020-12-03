<?php

require_once("config.php");

$cad = new Cadastro();

$cad->setNome("Igor Vittorello");
$cad->setEmail("igorvittorello@hotmail.com");
$cad->getSenha("igor2566");

echo $cad;

?>