<!DOCTYPE html>
<html>

<head>
  <title>Relacion 3 Ejer 5</title>
  <meta charset="UTF-8" />
</head>

<body>
  Hola,

  <?php
  $hora = $_GET["horas"];
  if ($hora >= 1 && $hora <= 40) {
    $total = $hora * 12;
    echo "Te corresponde un salario de $total euros";
  } elseif ($hora >= 41) {
    $total = (40 * 12) + (($hora - 40) * 16);
    echo "Te corresponde un salario de $total euros";
  } elseif ($hora < 1) {
    echo "No has trabajado... que vas a cobrar ni cobrar.";
  }
  ?>.

</body>

</html>