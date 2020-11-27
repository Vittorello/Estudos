<?php

/*echo "<select>";
$meses = array (
    "Janeiro", "Fevereiro", "Março",
    "Abril ", "Maio", "Junho",
    "Julho", "Agosto", "Setembro",
    "Outubro", "Novembro", "Dezembro"
);

foreach ($meses as $index => $mes) {

    echo "Indice: " .$index."<br>";
    echo '<option value " '.$meses. ' ">'.$mes.'</option>';*/
    
//}
?>

<br>

<form>

<input type="text" name="nome">
<input type="date" name="nascimento">
<input type="submit"value="OK">
<input type="email"value="E-mail">
<input type="file"value="Arquivo">

</form>

<?php

if (isset($_GET)){
    foreach ($_GET as $key => $value) {

        echo "Nome do campo: " .$key . "<br>";
        echo "Valor do Campo: " .$value . "<br>";
        echo "Email:" . $value;
        echo "<hr>";



    }
}
