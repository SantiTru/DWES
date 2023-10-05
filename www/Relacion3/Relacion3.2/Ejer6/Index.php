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
      background-color: rosybrown;
    }
  </style>
</head>

<body>
  <div class="contenedorpadre">
    <div class="contenedorhijo">
      <br>
      <br>
      Vamos a mostrar los números desde el 320 al 160 contando de 20 en 20.
      <br>
      <br>
      <?php
      $i = 320;
      do {
        echo $i . ", ";
        $i = $i -=20;
      } while ($i >= 160);
      ?>
    </div>
  </div>
</body>

</html>