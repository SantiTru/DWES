<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Relacion 3 Ejer 5</title>
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
      background-color: plum;
    }
  </style>
</head>

<body>
  <div class="contenedorpadre">
    <div class="contenedorhijo">
      <form action="Ej5.php" method="post">
        <br>
        <br>
        Introduce el valor de a:
        <input type="number" name="a"><br>
        <br>
        Introduce el valor de b:
        <input type="number" name="b"><br>
        <br>
        <br>
        <input type="submit" value="Enviar">
      </form>
    </div>
  </div>
</body>

</html>