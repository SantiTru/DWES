<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $_SESSION["jugador1"] = $_POST["jugador1"];
  $_SESSION["jugador2"] = $_POST["jugador2"];

  $rutaCartas = "cartas/";

  $letrasPosibles = ['c', 'd', 'p', 't'];

  $cartaJugador1 = $letrasPosibles[array_rand($letrasPosibles)] . rand(1, 10) . ".svg";
  $cartaJugador2 = $letrasPosibles[array_rand($letrasPosibles)] . rand(1, 10) . ".svg";

  $_SESSION["cartaJugador1"] = $rutaCartas . $cartaJugador1;
  $_SESSION["cartaJugador2"] = $rutaCartas . $cartaJugador2;
}
?>

<!DOCTYPE html>
<html>

<head>
  <title>Examen 13.11.23</title>
  <meta charset="UTF-8" />
  <style>
    img {
      width: 100px;
      height: auto;
    }
  </style>
</head>

<body>

  <h1>La suerte ha hablado</h1>

  <?php
  $jugador1 = $_SESSION["jugador1"];
  $jugador2 = $_SESSION["jugador2"];
  $cartaJugador1 = $_SESSION["cartaJugador1"];
  $cartaJugador2 = $_SESSION["cartaJugador2"];

  echo "<p>$jugador1 ha sacado la carta: <img src='$cartaJugador1'></p>";
  echo "<p>$jugador2 ha sacado la carta: <img src='$cartaJugador2'></p>";

  $numeroCartaJugador1 = intval(substr($cartaJugador1, -5, -4));
  $numeroCartaJugador2 = intval(substr($cartaJugador2, -5, -4));
  
  if ($numeroCartaJugador1 > $numeroCartaJugador2) {
      echo "<p>$jugador1 es el ganador!</p>";
  } elseif ($numeroCartaJugador2 > $numeroCartaJugador1) {
      echo "<p>$jugador2 es el ganador!</p>";
  } else {
      echo "<p>¡Es un empate!</p>";
  }
  ?>

  <form action="index.php">
    <input type="submit" value="Vuelve a tirar">
  </form>

</body>

</html>