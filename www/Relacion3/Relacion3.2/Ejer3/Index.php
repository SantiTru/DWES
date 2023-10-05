<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Relacion 3.2 Ejer 2</title>
  <style>
    .contenedorpadre {
      position: relative;
      width: 1200px;
      height: 500px;
    }

    .contenedorhijo {
      width: 200px;
      height: 200px;
      position: absolute;
      top: 50%;
      left: 50%;
      margin: -25px 0 0 -25px;
      background-color: burlywood;
    }
  </style>
</head>

<body>
  <div class="contenedorpadre">
    <div class="contenedorhijo">
      <br>
      <br>
      Vamos a mostrar los números multiplos de 5 del 0 al 100.
      <br>
      <br>
      <?php
      $i = 0;
      do {
        echo $i . ", ";
        $i = $i + 5;
      } while ($i <= 100);
      ?>
    </div>
  </div>
</body>

</html>