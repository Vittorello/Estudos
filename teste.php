<?php
$arrCombo = array(
    "scs" => "São Caetano do Sul",
    "sa"  => "Santo André",
    "sbc" => "São Bernardo do Campo"
);
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Formulário: combobox</title>
        <meta charset="utf-8">
    </head>
    <body>

        <form action="form-action.php" method="post">
            <p>
                <select name="cidades">
                    <option></option>
                    <?php foreach ($arrCombo as $key => $value): ?>
                        <?php echo "<option value=\"$key\" >$value</option>"; ?>
                    <?php endforeach; ?>
                </select>
                <input type="submit" value="Submit me!" />
            </p>
        </form>

    </body>
</html*/>

<br>

<html>
   
   <head>
      <title>Arithmetical Operators</title>
   </head>
   
   <body>
   
      <?php
         $a = 10;
         $b = 20;
         
         /* If condition is true then assign a to result otheriwse b */
         $result = ($a > $b ) ? $a :$b;
         
         echo "TEST1 : Value of result is $result<br/>";
         
         /* If condition is true then assign a to result otheriwse b */
         $result = ($a < $b ) ? $a :$b;
         
         echo "TEST2 : Value of result is $result<br/>";
      ?>
   
   </body>
</html>