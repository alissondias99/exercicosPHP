<!--
Maior número entre 3 enviados (POST): Envie 3 números via formulário e mostre o maior.
-->

<!DOCTYPE html>
<html>

<body>

    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <input type="number" name="num1">
        <input type="number" name="num2">
        <input type="number" name="num3">
        <input type="submit">
    </form>

    <?php
    if (isset($_POST['num1']) && isset($_POST['num2']) && isset($_POST['num3'])) {

        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $num3 = $_POST['num3'];
        if (empty($num1) || empty($num2) || empty($num3)){
            echo "Preencha os três campos";
        } else {
            if ($num1 > $num2 && $num1 > $num3) {
                echo "O maior número é: " . $num1;
            } elseif ($num2 > $num1 && $num2 > $num3) {
                echo "O maior número é: " . $num2;
            } else {
                echo "O maior número é: " . $num3;
            }
        }
    }
    ?>

</body>

</html>