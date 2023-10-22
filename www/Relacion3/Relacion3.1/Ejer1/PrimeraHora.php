<?php
$dia = $_POST["dia"];
$diaMinusculas = strtolower($_POST["dia"]);
echo "<h1>Primera hora</h1>";
echo "El $dia a primera hora hay: <br><br>";
switch ($diaMinusculas) {
  case "lunes":
    echo "Desarrollo Web en entorno cliente";
    break;
  case "martes":
    echo "Desarrollo Web en entorno cliente";
    break;
  case "miércoles":
    echo "Desarrollo Web en entorno servidor";
    break;
  case "miercoles":
    echo "Desarrollo Web en entorno servidor";
    break;
  case "jueves":
    echo "Desarrollo Web en entorno servidor";
    break;
  case "viernes":
    echo "Diseño de interfaces web";
    break;
  default:
    echo "No es un día de la semana válido";
    break;
};
