<!DOCTYPE html>
<html>

<head>
  <title>Relacion 3 Ejer 3</title>
  <meta charset="UTF-8" />
</head>

<body>
  Hola,

  <?php
  $dia = $_GET["dia"];
  switch ($dia) {
    case 1:
      echo "Es Lunes";
      break;
    case 2:
      echo "Es Martes";
      break;
    case 3:
      echo "Es Miercoles";
      break;
    case 4:
      echo "Es Jueves";
      break;
    case 5:
      echo "Es Viernes";
      break;
    case 6:
      echo "Es Sabado";
      break;
    case 7:
      echo "Es Domingo";
      break;
    default:
      echo "Día no valido";
      break;
  }
  ?>.
</body>

</html>