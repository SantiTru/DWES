<?php
$contrasenia = "1234";
$totalIntentos = 0;
$intento = $_POST["intento"];

if ($intento == $contrasenia && $totalIntentos <= 4) {
    header("Location: CajaFuerteAbierta.php");
    exit();
}
if ($intento != $contrasenia && $totalIntentos <= 4) {
    echo "Contraseña incorrecta";
    $totalIntentos++;
}
elseif ($totalIntentos == 4) {
    echo "Tu no eres Santi";
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Relacion 3.2 Ejer 7</title>
  <meta charset="UTF-8" />
  <style>
    .contenedorpadre {
      text-align: center;
      position: relative;
      width: 1200px;
      height: 500px;
    }
    .contenedorhijo {
      text-align: center;
      width: 200px;
      height: 200px;
      position: absolute;
      top: 50%;
      left: 50%;
      margin: 0px 0 0 0px;
      background-color: aquamarine;
    }
    .boton {
      text-align: center;
      background-color: aquamarine;
      width: 200px;
    }
  </style>
</head>
<body>
  <!-- Tu formulario y otros elementos HTML aquí -->
  <form action="Index.php">
    <br>
    <br>
    <div class="boton">
      <input type="submit" value="Volver a probar">
      <br>
    </div>
  </form>
</body>
</html>
