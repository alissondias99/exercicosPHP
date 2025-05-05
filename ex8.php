<!--
Exibir array de nomes com POST: Crie um formulário com 5 campos para nomes e exiba todos após o envio.
-->

<!DOCTYPE html>
<html>
<body>
    <form method="GET" action="<?php ?>">
        <input type="texte" name="nome1">
        <input type="texte" name="nome2">
        <input type="texte" name="nome3">
        <input type="texte" name="nome4">
        <input type="texte" name="nome5">
        <input type="submit">
    </form>

    <?php
    if (isset($_GET['nome1']) && isset($_GET['nome2']) && isset($_GET['nome3']) && isset($_GET['nome4']) && isset($_GET['nome5'])) {
        $nomes = array($_GET['nome1'], $_GET['nome2'], $_GET['nome3'], $_GET['nome4'], $_GET['nome5']);
        foreach ($nomes as $nome) {
            echo $nome . '<br>';
        }
    }
    ?>
</body>
</html>