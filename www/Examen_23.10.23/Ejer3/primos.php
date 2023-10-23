<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio 3 Examen 23/10/23</title>
  <style>
    .contenedorpadre {
      position: relative;
      width: 500px;
      height: 200px;

    }

    .contenedorhijo {
      width: 400px;
      height: 450px;
      position: absolute;
      top: 50%;
      left: 50%;
      margin: -25px 0 0 -25px;
      background-color: pink;
      text-align: center;
    }
  </style>

</head>

<body>
  <div class="contenedorpadre">
    <div class="contenedorhijo">
      <h1>Los números primos son: </h1>

      <?php

      function esPrimo($n)
      {
        for ($i = 2; $i < $n; $i++) {
          if ($n % $i == 0) {
            return false;
          }
        }
        return true;
      }


      $numero = $_POST['numero'];

      if ($numero == "") {
        echo "Introduce un número valido";
      } elseif ($numero <= 0) {
        echo "Introduce un número positivo";
      } elseif ($numero > 1000) {
        echo "Has introducido un número mayor a 1000";
      } else {

        for ($i = $numero; $i > 1; $i--) {
          if (esPrimo($i)) {
            echo $i . " ";
          }
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

</html>