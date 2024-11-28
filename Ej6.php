<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php

    function imprimirFigura($caracter, $numero) {
        for ($i = 1; $i <= $numero; $i++) {
            echo str_repeat($caracter, 2 * $i - 1) . "<br>";
        }
        for ($i = $numero - 1; $i >= 1; $i--) {
            echo str_repeat($caracter, 2 * $i - 1) . "<br>";
        }
    }

    imprimirFigura("*", 4);
    ?>

</body>
</html>