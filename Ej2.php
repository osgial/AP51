<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $numero = random_int(1,10);

    echo "Teniendo el numero " . $numero . " en numero romano es: " . numRomano($numero) . "<br>";

    function numRomano($numero) {
        $romanos = [
            1 => 'I',
            2 => 'II',
            3 => 'III',
            4 => 'IV',
            5 => 'V',
            6 => 'VI',
            7 => 'VII',
            8 => 'VIII',
            9 => 'IX',
            10 => 'X'
        ];
    
        return $romanos[$numero];
    }

    ?>
</body>
</html>