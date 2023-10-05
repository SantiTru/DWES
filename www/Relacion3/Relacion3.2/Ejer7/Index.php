<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Relacion 3.2 Ejer 7</title>
  <style>
    .contenedorpadre {
      text-align: center;
      position: relative;
      width: 1200px;
      height: 500px;
    }
    .contenedorhijo {
      text-align: center;
      width: 200px;
      height: 200px;
      position: absolute;
      top: 50%;
      left: 50%;
      margin: 0px 0 0 0px;
      background-color: aquamarine;
    }
    .boton {
      text-align: center;
      background-color: aquamarine;
      width: 200px;
    }
  </style>
</head>
<body>
  <div class="contenedorpadre">
    <div class="contenedorhijo">
      <br>
      Bienvenido a su caja fuerte.
      <form action="CajaFuerte.php" method="post">
        <br>
        <br>
        Introduzca la contraseña:
        <br>
        <br>
        <input type="number" name="intento" required><br>
        <br>
        <br>
        <div class="boton">
          <input type="submit" value="Probar suerte">
          <br>
        </div>
      </form>
    </div>
  </div>
</body>
</html>