<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit();
}

echo "<div style='text-align: center;'>";
echo "<h1>" . "Bienvenid@, " . $_SESSION['usuario'] . "!<br>" . "</h1>";
echo "<br>" . "<img src='estilos/imagen.jpg' alt= 'Imagen'>";
echo "<a href='logout.php'>Cerrar sesión</a>";
echo "</div>";

?>