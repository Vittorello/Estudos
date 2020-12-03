<?php 

interface veiculo {

    public function acelerar($velocidade);
    public function frenar($velocidade);
    public function trocarMarcha($marcha);

}

class Civic implements veiculo {

    public function acelerar($velocidade)
{
        echo "O vecículo acelerou até" . $velocidade . "km/h";
}
    public function frenar($velocidade)
{
        echo "O veículo frenou até" . $velocidade . "km/h";
}
    public function trocarMarcha($marcha)
{
        echo "o veículo engatou a marcha" . $marcha ;
}


}

$carro = new Civic;

$carro->acelerar(120);
$carro->velocidade(50);
$carro->trocarMarcha(24);



?>