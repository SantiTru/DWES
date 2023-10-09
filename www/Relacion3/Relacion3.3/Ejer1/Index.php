<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Relacion 3.2 Ejer 8</title>
  <style>
    .contenedorpadre {
      position: relative;
      width: 1000px;
      height: 200px;
    }

    .contenedorhijo {
      width: 400px;
      height: 400px;
      position: absolute;
      top: 50%;
      left: 50%;
      margin: -25px 0 0 -25px;
      background-color: khaki;
      text-align: center;
    }

    .boton {
      text-align: center;
      width: 400px;
    }
  </style>
</head>

<body>
  <div class="contenedorpadre">
    <div class="contenedorhijo">
      <br>
      <br>
      <h3>Vamos a mostrar números aleatorios, cuadrados y cubos de estos números</h3>

      <?php

      $numeros = array();
      $cuadrados = array();
      $cubos = array();

      echo "<table border=1>";
      for ($i = 0; $i < 20; $i++) {
        $numeros[$i] = rand(1, 100);
        $cuadrados[$i] = pow($numeros[$i], 2);
        $cubos[$i] = pow($numeros[$i], 3);

      }
      foreach ($numeros as $numero) {
        echo "<tr><td>$numero</td></tr>";
      }
      foreach ($cuadrados as $cuadrado) {
        echo "<tr><td>$cuadrado</td></tr>";
      }
      foreach ($cubos as $cubo) {
        echo "<tr><td>$cubo</td></tr>";
      } 
      echo "</table>";
      ?>

    </div>
  </div>
</body>

</html>