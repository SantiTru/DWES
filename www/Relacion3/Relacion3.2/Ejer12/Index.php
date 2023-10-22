<!DOCTYPE html>
  <html lang = "en">
    <head>
      <meta charset = "utf-8" />
      <meta name = "viewport" content = "width = device-width, initial-scale = 1.0" />
      <title>Relación 3.2 Ejercicio 12</title>
    </head>
    <body>

    <h1>Consulta la serie de Fibonacci</h1>
      <form method = "post">
        <label for = "iteraciones"> Nº Iteraciones a consultar:  <input name = "iteraciones" type = "number" min = "1" required /></label>
        <br /><br />
        <input type = "submit" value = "Consultar" />
      </form>

      <?
        if (isset($_POST["iteraciones"])) {
          $iteraciones = $_POST["iteraciones"];

          if ($iteraciones == 0) {
            echo "<br />No se ha introducido ninguna iteración";
          } elseif ($iteraciones == 1) {
            echo "<br />Serie de Fibonacci: 0";
          } elseif ($iteraciones == 2) {
            echo "<br />Serie de Fibonacci: 0, 1";
          } else {
            echo "<br />Serie de Fibonacci: 0, 1, ";
            $previo = 0;
            $actual = 1;
            $siguiente = 0;

            for ($i = 3; $i <= $iteraciones; $i++) {
              $siguiente = $previo + $actual;
              $previo = $actual;
              $actual = $siguiente;
              echo "$siguiente, ";
            }

            $siguiente = $previo + $actual;
            echo $siguiente;
          }
        }
      ?>
    </body>
  </html>