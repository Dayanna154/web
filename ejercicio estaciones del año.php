<html>
<head>
    <title>Identificación de estaciones</title>
</head>
<body>
    <?php
    $mes = rand(1, 12); // Genera un número aleatorio entre 1 y 12

    if ($mes >= 3 && $mes <= 5) {
        $estacion = "Primavera";
    } elseif ($mes >= 6 && $mes <= 8) {
        $estacion = "Verano";
    } elseif ($mes >= 9 && $mes <= 11) {
        $estacion = "Otoño";
    } else {
        $estacion = "Invierno";
    }

    echo "El mes generado es $mes y pertenece a la estación: $estacion.";
    ?>
</body>
</html>