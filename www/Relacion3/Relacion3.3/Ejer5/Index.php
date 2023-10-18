<!--Realiza un programa que genere 8 números enteros y que luego muestre esos números de
colores, los pares de un color y los impares de otro.-->

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Relación 3.3 Ejer 4</title>
  <style>
    .contenedorpadre {
      position: relative;
      width: 800px;
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
      background-color: gainsboro;
      text-align: center;
    }

    .pares {
      color: green;
    }

    .impares {
      color: purple;
    }
  </style>
</head>

<body>
  <div class="contenedorpadre">
    <div class="contenedorhijo">
      <br>
      <h3>Vamos a mostrar 8 números aleatorios los pares van a estar coloreados de verde y los impares de morado: </h3>
      
      <?php
      $numeros = array();
      for ($i = 0; $i < 8; $i++) {
        $numeros[$i] = rand(1, 10);
        if ($numeros[$i] % 2 == 0) {
          echo "<span class='pares'>$numeros[$i]</span>" . " ";
        } elseif ($numeros[$i] % 2 != 0) {
          echo "<span class='impares'>$numeros[$i]</span>" . " ";
        }
      }

      ?>

    </div>
  </div>
</body>

</html>