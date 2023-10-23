<!--Muestra los números capicúa que hay entre 1 y 99999-->


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Prueba de bibliloteca de funciones</title>
  <style>
    .contenedorpadre {
      position: relative;
      width: 500px;
      height: 200px;

    }

    .contenedorhijo {
      width: 800px;
      height: 1400px;
      position: absolute;
      top: 50%;
      left: 50%;
      margin: -25px 0 0 -25px;
      background-color: pink;
      text-align: center;
    }

    .primo {
      color: red;
      font-weight: bold;
    }
  </style>

</head>

<body>
  <div class="contenedorpadre">
    <div class="contenedorhijo">
      <h1>¡Biblioteca de funciones!</h1>
      <h4>Vamos a probar las funciones de la biblioteca mostrando los números capicúa que hay entre 1 y 99999</h4>

      <?php
      include('../FuncionesMatematicas/BibliotecaDeFunciones.php');

      for ($i = 1; $i <= 99999; $i++) {
        if (esCapicua($i)) {
          echo $i . "   ";
        }
      }

      ?>

      <br>
      <br>

      <form action="Index.php" method="post">
        <input type="submit" value="Volver al indice">
      </form>
    </div>
  </div>
</body>