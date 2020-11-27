<?php

$qualASuaIdade = 20;

$idadeCrianca = 12;
$idadeMaior = 18;
$idadeIdoso = 65;

if ($qualASuaIdade < $idadeCrianca) {

    echo "Crianca";

} else if ($qualASuaIdade < $idadeIdoso) {
        
    echo "Jovem";
    
} else if ($idadeIdoso > $idadeMaior){

    echo "Idoso";
    
} else {

    echo "Falecido";
}
    
echo "<br>";

echo ($qualASuaIdade < $idadeMaior)?"Menor de Idade":"Maior de Idade";

?>

<br>

<?php

$nota = 1;

if ($nota >= 7){

    echo "Aprovado $nota";

} else if (($nota <= 7) && ($nota >= 4)) 
{

echo "Recuperacao = $nota";

}else {

    echo "Reprovado $nota";
}


?>
