<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    echo "Los numeros de la loteria son: " . implode(", ",dameNumero()) . "<br>";

    function dameNumero() {
        $combinacion = [];
        for ($i=0; $i < 6 ; $i++) { 
            do {
                $numero = random_int(1, 49);
            } while (in_array($numero, $combinacion));
            $combinacion[] = $numero;
        }
        return $combinacion;
    }

    ?>
</body>
</html>