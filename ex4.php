<!--
Calculadora com POST: Faça um formulário com dois números e uma operação (select ou radio), e mostre o resultado.
-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <input type="number" name="num1">
        <input type="number" name="num2">

        soma: <input type="radio" id="soma" name="calc" value="soma">

        subtrair: <input type="radio" id="sub" name="calc" value="sub">

        dividir: <input type="radio" id="div" name="calc" value="div">

        multiplicar: <input type="radio" id="mult" name="calc" value="mult">

        <input type="submit">
    </form>



    <?php
    if (isset($_POST['num1']) & isset($_POST['num2'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        if (empty($num1) || empty($num2)) {
            echo "Preencha os dois campos";
        } else {
            $opcaoSelecionada = $_POST['calc'];

            switch ($opcaoSelecionada) {

                case 'soma':
                    echo $num1 + $num2;
                    break;

                case 'sub':
                    echo $num1 - $num2;
                    break;

                case 'div':
                    echo $num1 / $num2;
                    break;

                case 'mult':
                    echo $num1 * $num2;
                    break;

                default:
                    echo "escholha uma opção.";
            }
        }
    }

    ?>
</body>

</html>