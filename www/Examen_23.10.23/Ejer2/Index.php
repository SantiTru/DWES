<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio 2 Examen 23/10/23</title>
  <style>
    .contenedorpadre {
      position: relative;
      width: 600px;
      height: 200px;
      text-align: center;
    }

    .contenedorhijo {
      width: 400px;
      height: 300px;
      position: absolute;
      top: 50%;
      left: 50%;
      margin: -25px 0 0 -25px;
      background-color: salmon;
      text-align: center;
    }

    table {
      margin: 0 auto;
      background-color: pink;
    }
  </style>
</head>

<body>
  <div class="contenedorpadre">
    <div class="contenedorhijo">
      <br>
      <br>
      <h3>Vamos a mostrar nuestro horario de clase: </h3>

      <?php
      $array = array();

      for ($i = 0; $i < 3; $i++) {
        $DWES = 'DWES';
        $DAW = 'DAW';
        $DIW = 'DIW';
        $DWEC = 'DWEC';
        $EIE = 'EIE';
        $HLC = 'HLC';

        $array[] = array(
          'lunes' => $DWEC,
          'martes' => $DWEC,
          'miercoles' => $DWES,
          'jueves' => $DWES,
          'viernes' => $DIW,
        );
      }
      for ($j = 0; $j < 3; $j++) {

        $array[] = array(
          'lunes' => $DWES,
          'martes' => $DAW,
          'miercoles' => $DIW,
          'jueves' => $EIE,
          'viernes' => $HLC,
        );
      }

      echo "<table border=1 align=center>";
      echo "<tr><th>Lunes</th><th>Martes</th><th>Miércoles</th><th>Jueves</th><th>Viernes</th></tr>";
      foreach ($array as $arrays) {
        echo "<tr>";
        echo "<td>" . $arrays['lunes'] . "</td>";
        echo "<td>" . $arrays['martes'] . "</td>";
        echo "<td>" . $arrays['miercoles'] . "</td>";
        echo "<td>" . $arrays['jueves'] . "</td>";
        echo "<td>" . $arrays['viernes'] . "</td>";
        echo "</tr>";
      }
      echo "</table>";
      ?>

    </div>
  </div>
</body>

</html>