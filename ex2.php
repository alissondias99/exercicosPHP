<!--
Soma com POST: Crie um formulário com dois campos numéricos. Ao enviar via POST, mostre a soma.
-->

<!DOCTYPE html>
<html>

<body>

    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <input type="number" name="num1">
        <input type="number" name="num2">
        <input type="submit">
    </form>

    <?php
    if (isset($_POST['num1']) & isset($_POST['num2'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        if (empty($num1) || empty($num2)) {
            echo "Preencha os dois campos";
        } else {
            echo $num1 + $num2;
        }
    }
    ?>

</body>

</html>