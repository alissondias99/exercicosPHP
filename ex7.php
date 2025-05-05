<!--
Contador de 1 a N com GET: Envie um número via URL e conte de 1 até esse número.
-->

<!DOCTYPE html>
<html>
<body>
    <form method="GET" action="<?php ?>">
        <input type="number" name="fim">
        <input type="submit">
    </form>

    <?php
    if (isset($_GET['fim'])) {
        $fim = $_GET['fim'];
        
        for ($i = 1; $i <= $fim; $i++) {
            echo $i . '<br>';
        }
    }
    ?>
</body>

</html>