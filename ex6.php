<!--
Verificador de maioridade com POST: Peça o ano de nascimento por formulário POST e diga se é maior de idade.
-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="POST" action="<?php ?>">
        <input type="number" name="ano">
        <input type="submit">
    </form>

    <?php
    if (isset($_POST['ano'])) {
        $nascimento = $_POST['ano'];

        if (empty($nascimento)) {
            echo "Preencha o campo";
        } elseif (strlen((string)$nascimento) < 4 || strlen((string)$nascimento) > 4) {
            echo "O ano deve ter 4 digitos";
        } else {

            echo "Você nasceu em $nascimento <br>";
            echo "Estamos no ano de" . date("Y") .  "<br>";
            $idade = date("Y") - $nascimento;

            if ($idade < 18) {
                echo "Você ainda é de menor e tem $idade anos";
            } else {
                echo "Você é de maior e tem $idade anos";
            }
        }
    }
    ?>
</body>

</html>