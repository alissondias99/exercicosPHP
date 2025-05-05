<!--
Tabuada via GET: Receba um número por GET e mostre sua tabuada de 1 a 10.
-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="GET" action="<?php ?>">
        <input type="number" name="num1">
        <input type="submit">
    </form>

    <?php
    if (isset($_GET['num1'])) {
        $num1 = $_GET['num1'];
        if (empty($num1)) {
            echo "Preencha o campo";
        } else {
            $fim = 11;
            for ($ini = 1; $ini < $fim; $ini++){
                echo "$num1 X $ini = " . $num1 * $ini . "<br>";
                ;
            }
        }
    }
    ?>
</body>

</html>