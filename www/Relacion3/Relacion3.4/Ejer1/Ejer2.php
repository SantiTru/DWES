<!--Muestra los números primos que hay entre 1 y 1000-->


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
      height: 1200px;
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
      <h4>Vamos a probar las funciones de la biblioteca coloreando los números primos que hay entre 1 y 1000</h4>

      <?php
      include('BibliotecaDeFunciones.php');

      for ($i = 1; $i <= 1000; $i++) {
        if (esPrimo($i)) {
          echo "<span class='primo'>$i</span>" . " ";
        } else {
          echo "$i" . " ";
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