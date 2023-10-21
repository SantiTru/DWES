<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Relacion 3.2 Ejer 8</title>
  <style>
    .contenedorpadre {
      position: relative;
      width: 1400px;
      height: 200px;
      text-align: center;
    }

    .contenedorhijo {
      width: 400px;
      height: 600px;
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
    .tabla {
      align-items: center;
      text-align: center;
      width: 100px;
      height: 500px;
      background-color: pink;
      margin: auto;
      margin-top: 15px;
    }
  </style>
</head>

<body>
  <div class="contenedorpadre">
    <div class="contenedorhijo">
      <?php

      $numero = $_POST["consulta"];
      echo "<table border=\"1\" class='tabla'>";

      for ($i = 0; $i <= 10; $i++) {
        echo " <tr>
        <td style=padding:7px>" . $numero . " </td>
        <td style=padding:7px>" . ' x ' . " </td>
        <td style=padding:10px>" .  $i  . " </td>
        <td style=padding:7px>" . ' = ' . " </td>
        <td style=padding:10px>" .  $numero * $i  . " </td>
        </tr>";
      }
      echo "</table>";
      ?>
      <br>
      <form action="Index.php" method="post">
        <input type="submit" value="Consultar otra tabla">
      </form>
    </div>
  </div>
</body>

</html>