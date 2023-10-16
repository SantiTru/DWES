<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio con array asociativos</title>
  <style>
    .contenedorpadre {
      position: relative;
      width: 1000px;
      height: 200px;
      text-align: center;
    }

    .contenedorhijo {
      width: 400px;
      height: 800px;
      position: absolute;
      top: 50%;
      left: 50%;
      margin: -25px 0 0 -25px;
      background-color: salmon;
      text-align: center;
    }
                                                                                                                                                                                                        
    .boton {
      text-align: center;
      width: 400px;
    }

    table {
      margin: 0 auto; /* Centra la tabla horizontalmente */
    }
  </style>
</head>

<body>
  <div class="contenedorpadre">
    <div class="contenedorhijo">
      <br>
      <br>
      <h3>Vamos a mostrar 20 números aleatorios y los cuadrados y cubos de estos números</h3>

      <?php
$datos = array();

for ($i = 0; $i < 20; $i++) {
    $numero = rand(1, 100);
    $cuadrado = pow($numero, 2);
    $cubo = pow($numero, 3);
    
    $datos[] = array(
        'numero' => $numero,
        'cuadrado' => $cuadrado,
        'cubo' => $cubo
    );
}

echo "<table border=1 align=center>";
echo "<tr><th>Número</th><th>Cuadrado</th><th>Cubo</th></tr>";
foreach ($datos as $dato) {
    echo "<tr>";
    echo "<td>" . $dato['numero'] . "</td>";
    echo "<td>" . $dato['cuadrado'] . "</td>";
    echo "<td>" . $dato['cubo'] . "</td>";
    echo "</tr>";
}
echo "</table>";
?>

 
    </div>
  </div>
</body>
</html>