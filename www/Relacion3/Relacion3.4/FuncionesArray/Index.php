<!DOCTYPE html>
<html>
<head>
    <title>Prueba de funciones PHP</title>
</head>
<body>
    <h1>Prueba de funciones PHP</h1>

    <form method="post">
        <label for="min">Valor mínimo:</label>
        <input type="number" name="min" id="min" required><br>

        <label for "max">Valor máximo:</label>
        <input type="number" name="max" id="max" required><br>

        <label for="n">Tamaño del array:</label>
        <input type="number" name="n" id="n" required><br>

        <input type="submit" value="Generar Array y Realizar Operaciones">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        include "BiblioFuncionesArray.php"; // Incluye el archivo con las funciones

        $min = (int)$_POST["min"];
        $max = (int)$_POST["max"];
        $n = (int)$_POST["n"];
        
        $arrayGenerado = generaArrayInt($min, $max, $n);

        echo "<h2>Array generado:</h2>";
        echo implode(", ", $arrayGenerado) . "<br>";

        echo "<h2>Operaciones en el array:</h2>";
        echo "Mínimo: " . minimoArrayInt($arrayGenerado) . "<br>";
        echo "Máximo: " . maximoArrayInt($arrayGenerado) . "<br>";
        echo "Media: " . mediaArrayInt($arrayGenerado) . "<br>";

        $num = 42; // Cambia el número según tus necesidades
        if (estaEnArrayInt($arrayGenerado, $num)) {
            echo "$num está en el array en la posición " . posicionEnArray($arrayGenerado, $num) . "<br>";
        } else {
            echo "$num no está en el array.<br>";
        }

        $nRotacion = 2; // Cambia la cantidad de rotación según tus necesidades
        echo "<h2>Array rotado a la derecha $nRotacion veces:</h2>";
        $arrayRotado = rotaDerechaArrayInt($arrayGenerado, $nRotacion);
        echo implode(", ", $arrayRotado) . "<br>";

        echo "<h2>Array invertido:</h2>";
        $arrayInvertido = volteaArrayInt($arrayGenerado);
        echo implode(", ", $arrayInvertido) . "<br>";
    }
    ?>
</body>
</html>
