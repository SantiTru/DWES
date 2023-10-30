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
      <h3>Bienvenido a la consulta de tablas de multiplicar</h3>
      <form action="TablaMultiplicar.php" method="post">
        <br>
        <br>
        Introduzca el número de la tabla de multiplicar que desea consultar:
        <br>
        <br>
        <input type="number" name="consulta" required><br>
        <br>
        <br>
        <div class="boton">
          <input type="submit" value="Consulta">
          <br>
        </div>
      </form>
    </div>
  </div>
</body>

</html>