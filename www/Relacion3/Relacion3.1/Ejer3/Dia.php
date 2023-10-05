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
      echo "Hoy es Lunes";
      break;
    case 2:
      echo "Hoy es Martes";
      break;
    case 3:
      echo "Hoy es Miercoles";
      break;
    case 4:
      echo "Hoy es Jueves";
      break;
    case 5:
      echo "Hoy es Viernes";
      break;
    case 6:
      echo "Hoy es Sabado";
      break;
    case 7:
      echo "Hoy es Domingo";
      break;
    default:
      echo "Dia no valido";
      break;
  }
  ?>.
</body>

</html>