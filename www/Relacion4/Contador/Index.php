<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contador insolente</title>
  <style>
    .contenedorpadre {
      position: relative;
      width: 400px;
      height: 200px;
      text-align: center;

    }

    .contenedorhijo {
      width: 400px;
      height: 100px;
      position: absolute;
      top: 50%;
      left: 50%;
      margin: -25px 0 0 -25px;
      background-color: rgb(130, 80, 180);
      text-align: center;
    }
  </style>
</head>

<body>
  <div class="contenedorpadre">
    <h1>Contador insolente</h1>
    <div class="contenedorhijo">
      <?php
      $_SESSION["contador"];

      if (isset($_POST["reset"])) {
        $_SESSION["contador"] = 0;
      } else {
        if (!isset($_SESSION["contador"])) {
          $_SESSION["contador"] = 1;
        } else {
          $_SESSION["contador"]++;
        }
      }
      echo "<br>";
      if ($_SESSION["contador"] == 0) {
        echo "Has visitado esta página " . $_SESSION["contador"] . " veces, ¡deberias visitarnos más!";
      } else {
        if ($_SESSION["contador"] == 1) {
          echo "Has visitado esta página " . $_SESSION["contador"] . " sola vez, dale más!";
        } else {
          echo "Has visitado esta página " . $_SESSION["contador"] . " veces, pesao!";
        }
      }
      ?>

      <form method="post">
        <br>
        <input type="Submit" value="Poner el contador a cero" name="reset">
      </form>
    </div>
  </div>

</body>

</html>