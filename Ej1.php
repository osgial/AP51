<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    $hermano1 = 18;
    $hermano2 = 9;

    echo "La diferencia de edad es: " . diferenciaEdad($hermano1, $hermano2) . "<br>";

    function diferenciaEdad($persona1, $persona2){
        return abs{$persona1-$persona2};
    }

    ?>
</body>
</html>