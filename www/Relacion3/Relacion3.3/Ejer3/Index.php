<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Relación 3.3 Ejer 3</title>
  <style>
    .contenedorpadre {
      position: relative;
      width: 1000px;
      height: 200px;
      text-align: center;
    }

    .contenedorhijo {
      width: 800px;
      height: 400px;
      position: absolute;
      top: 50%;
      left: 50%;
      margin: -25px 0 0 -25px;
      background-color: rgb(241, 243, 94);
      text-align: center;
    }

    .boton {
      text-align: center;
      width: 400px;
    }

    table {
      margin: 0 auto;
      /* Centra la tabla horizontalmente */
    }
  </style>
</head>
<body>
  <div class="contenedorpadre">
    <div class="contenedorhijo">
      <br>
      <br>
      <h3>Vamos a mostrar 15 numeros aleatorios y vamos a moverlos una posicion dentro del array</h3>
      <?php

      $array1 = array();
      $array2 = array();

      for ($i = 0; $i < 15; $i++) {
        $array1[$i] = rand(0, 100);
      }
      $array2[14] = $array1[0];
      for ($i = 0; $i < 14; $i++) {
        $array2[$i] = $array1[$i + 1];
      }
      echo "Este es el primer array: ";
      for($i = 0; $i < 15; $i++) {
        echo $array1[$i] . " ";
      }
      echo "<br>";
      echo "<br>";
      echo "Esta es el segundo array con los números corridos un lugar: ";
      for($i = 0; $i < 15; $i++) {
      echo $array2[$i] . " ";
      }
      ?>
    </div>
  </div>
</body>
</html>