<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $empleados = [
        'Juan' => [
            'horas' => 40,
            'tarifa' => 15
        ],
        'Perico' => [
            'horas' => 20,
            'tarifa' => 25
        ],
        'Andrés' => [
            'horas' => 45
        ],
    ];

    foreach ($empleados as $nombre => $datos) {
        $horas = $datos['horas'];
        $tarifa = $datos['tarifa'] ?? 10;
        $salario = calculaSalario($horas, $tarifa);

        echo "Empleado: $nombre, Salario total: €" . $salario . "<br>";
    }

    function calculaSalario($horas, $tarifa = 10) {
        if ($horas <= 40) {
            return $horas * $tarifa;
        } else {
            $horasExtras = $horas - 40;
            $salarioNormal = 40 * $tarifa;
            $salarioExtras = $horasExtras * $tarifa * 1.25;
            return $salarioNormal + $salarioExtras;
        }
    }

    ?>
</body>
</html>