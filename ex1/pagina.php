<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
        <?php
            if (isset($_GET['nome'])) {
                $nome = $_GET['nome'];
                echo "Olá, $nome!";
            } else {
                echo "Nome não fornecido.";
            }
        ?>
    </p>
</body>
</html>