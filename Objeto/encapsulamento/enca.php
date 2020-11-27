<?php
//public, todo mundo vê
//protected, na mesma classe e classe extendida
//private só na mesma classe

class Pessoa {

    public $nome = "Igor Vittorello";
    protected $idade = 20;
    private $senha = "igor2566";

    public function verDados(){

        echo $this->nome . "<br>";
        echo $this->idade . "<br>";
        echo $this->senha . "<br>";

    }


}


class Programador extends Pessoa {

    public function verDados(){

        echo get_class($this) . "<br>";

        echo $this->nome . "<br>";
        echo $this->idade . "<br>";
        echo $this->senha . "<br>";

    }
    

}

$objeto = new Programador();

//echo $objeto->nome . "<br>";

$objeto->verDados();

?>