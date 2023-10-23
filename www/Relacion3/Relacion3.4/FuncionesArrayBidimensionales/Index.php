<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays Bidimensionales</title>
</head>

<body>
    <?php
    include("./BiblioFuncionesArrayBi.php");

    //imprimeArrayBi(generaArrayBiInt(1, 7, 0, 10));

    $n = 4; // Cambia estos valores según tus necesidades
    $m = 4;
    $min = 1;
    $max = 10;

    $arrayBi = generaArrayBiInt($n, $m, $min, $max);

    // Imprimir el array completo
    echo "Completo : ";
    echo "<br><br>";
    imprimeArrayBi($arrayBi);

    echo "<hr>";
    echo "Fila : ";
    echo "<br><br>";

    // Imprimir una fila específica
    $filan = 2; // Cambia este valor para seleccionar la fila deseada
    filaDeArrayBiInt($arrayBi, $filan);

    echo "<hr>";
    echo "<br>";
    echo "Columna :";
    echo "<br><br>";
    

    // Imprimir una columna específica
    $columnaj = 1; // Cambia este valor para seleccionar la columna deseada
    columnaDeArrayBiInt($arrayBi, $columnaj);


    ?>
</body>

</html>