
<html>
<head>
    <title>Clasificación de Triángulo</title>
</head>
<body>
    <?php
    // Generar tres valores aleatorios entre 1 y 10
    $lado1 = rand(1, 10);
    $lado2 = rand(1, 10);
    $lado3 = rand(1, 10);

    // Determinar el tipo de triángulo
    if ($lado1 == $lado2 && $lado2 == $lado3) {
        $tipo = "Equilátero (todos los lados son iguales)";
    } elseif ($lado1 == $lado2 || $lado1 == $lado3 || $lado2 == $lado3) {
        $tipo = "Isósceles (dos lados son iguales)";
    } else {
        $tipo = "Escaleno (todos los lados son diferentes)";
    }

    // Mostrar los resultados
    echo "Los lados del triángulo son: $lado1, $lado2 y $lado3.<br>";
    echo "El triángulo es: <strong>$tipo</strong>.";
    ?>
</body>
</html>