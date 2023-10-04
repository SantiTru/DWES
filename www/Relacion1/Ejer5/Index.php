<!DOCTYPE html>
<html>

<head>
  <title>Ejercicio 5 Relación 1</title>
  <meta charset="UTF-8" />
</head>

<body>

  <h1 style="font-size: 15px;">Variables</h1>

  <?php

  $num1 = 144;
  $num2 = 999;


  echo "La primera variable es <strong>$num1</strong><br>";
  echo "La segunda variable es <strong>$num2</strong>";

  ?>

  <h2 style="font-size:15px;">Calculadora</h2>

  <?php

  $suma = $num1 + $num2;
  $resta = $num1 - $num2;
  $multiplicacion = $num1 * $num2;
  $division = $num2 / $num1;

  echo "El resultado de la suma es:  <strong>$suma</strong>";
  echo "<br>El resultado de la resta es:  <strong>$resta</strong>";
  echo "<br>El resultado de la multiplicación es: <strong>$multiplicacion</strong> ";
  echo "<br>El resultado de la división es:  <strong>$division</strong>";

  ?>
</body>

</html>