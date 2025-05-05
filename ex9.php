<!--
Soma de array de números com POST: Envie 5 números por POST e exiba a soma total.
-->

<!DOCTYPE html>
<html>

<body>

    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <input type="number" name="num1">
        <input type="number" name="num2">
        <input type="number" name="num3">
        <input type="number" name="num4">
        <input type="number" name="num5">
        <input type="submit">
    </form>

    <?php
    if (isset($_POST['num1']) & isset($_POST['num2'] ) & isset($_POST['num3']) & isset($_POST['num4']) & isset($_POST['num5'])) {   
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $num3 = $_POST['num3'];
        $num4 = $_POST['num4'];
        $num5 = $_POST['num5'];
        if (empty($num1) || empty($num2) || empty($num3) || empty($num4) || empty($num5)) {
            echo "Preencha os dois campos";
        } else {
            echo $num1 + $num2 + $num3 + $num4 + $num5;
        }
    }
    ?>

</body>

</html>