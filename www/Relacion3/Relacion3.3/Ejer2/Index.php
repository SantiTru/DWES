<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Relacion 3.3 Ejer 2</title>
  <style>
    .contenedorpadre {
      position: relative;
      width: 1000px;
      height: 200px;
      text-align: center;
    }

    .contenedorhijo {
      width: 400px;
      height: 400px;
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
      <h3>Vamos a mostrar el máximo y el minimo de los números que introduzcas</h3>

      <form action="MaxMin.php" method="post">
        <input type="number" name="num1"><br>
        <br>
        <input type="number" name="num2"><br>
        <br>
        <input type="number" name="num3"><br>
        <br>
        <input type="number" name="num4"><br>
        <br>
        <input type="submit" value="Enviar">
      </form>
    </div>
  </div>
</body>

</html>