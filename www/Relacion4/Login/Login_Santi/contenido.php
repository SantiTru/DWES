<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit();
}

echo "<div style='background-image: url(../Img/FondoAzul2.jfif)'>";
echo "<div style='text-align: center; margin-top: 3%'>";
echo "<h1>" . "Bienvenid@, " . $_SESSION['usuario'] . "!<br>" . "</h1>";
echo "<br>" . "<img src='Img/imagen.jpg' alt= 'Imagen'>";
echo "<a href='logout.php'>Cerrar sesión</a>";
echo "</div>";

?>