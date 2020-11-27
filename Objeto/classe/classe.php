<?php
//Atributos fora do "método", não precisa do "$", só dentro de um "método" que usa o "$"\\


class Pessoa {

    public $nome;//Atributo

    public function falar(){//Método

        return "O meu nome é ".$this->nome;

    }


}

$Igor = new Pessoa();
$Igor->nome ="Igor Camargo";
echo $Igor->falar();

?>