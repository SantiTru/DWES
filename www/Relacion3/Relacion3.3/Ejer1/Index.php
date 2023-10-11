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
      $numero = array();
      $cuadrado = array();
      $cubo = array();

      for ($i = 0; $i < 20; $i++) {
        $numero[$i] = rand(1, 100);
        $cuadrado[$i] = pow($numero[$i], 2);
        $cubo[$i] = pow($numero[$i], 3);
      }

      echo "<table border=1 aling=center>";
      echo "<tr><th>Número</th><th>Cuadrado</th><th>Cubo</th></tr>";
      for ($i = 0; $i < 20; $i++) {
        echo "<tr>";
        echo "<td>" . $numero[$i] . "</td>";
        echo "<td>" . $cuadrado[$i] . "</td>";
        echo "<td>" . $cubo[$i] . "</td>";
        echo "</tr>";
      }
      echo "</table>";
      ?>
 
    </div>
  </div>
</body>
</html>