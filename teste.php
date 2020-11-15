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
</html