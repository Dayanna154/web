<html>
<head>
    <title>Clasificación de nota</title>
</head>
<body>
    <?php
    $nota = rand(0, 100); // Genera un número aleatorio entre 0 y 100

    if ($nota >= 0 && $nota <= 59) {
        $clasificacion = "Reprobado";
    } elseif ($nota >= 60 && $nota <= 79) {
        $clasificacion = "Aprobado";
    } elseif ($nota >= 80 && $nota <= 89) {
        $clasificacion = "Notable";
    } else {
        $clasificacion = "Sobresaliente";
    }

    echo "La nota obtenida es $nota y su clasificación es: $clasificacion.";
    ?>
</body>
</html>