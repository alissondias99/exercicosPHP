<!--
Verificar par ou ímpar com GET: Use $_GET['num'] para identificar se o número enviado é par ou ímpar.
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
        <input type="number" name="num1">
        <input type="submit">
    </form>

    <?php
    if (isset($_POST['num1'])) {
        $num1 = $_POST['num1'];
        if (empty($num1)) {
            echo "Preencha o campo";
        } else {
            if($num1 % 2 ==0){
                echo 'O número é par';
            } else{
                echo 'O número é ímpar';
            }
        }
    }
    ?>
</body>

</html>