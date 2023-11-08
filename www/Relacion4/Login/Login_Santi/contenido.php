<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit();
}

echo "<div style='text-align: center; margin-top: 3%'>";
echo "<h1>" . "Welcome, " . $_SESSION['usuario'] . "!" . "</h1>";
echo "<h5>Te dejo unas imagenes generadas por IA para tu disfrute:</h5>";
echo "<br>" . "<img src='Img/bosque1.png' alt= 'Imagen'>";
echo "<br>" . "<img src='Img/bosque2.png' alt= 'Imagen'>";
echo "<br>" . "<img src='Img/bosque3.png' alt= 'Imagen'>";
echo "<br>" . "<img src='Img/bosque4.png' alt= 'Imagen'>";
echo "<br>" . "<img src='Img/bosque5.png' alt= 'Imagen'>";
echo "<br>" . "<img src='Img/bosque6.png' alt= 'Imagen'>";
echo "<h2>" ."<a href='logout.php'>Cerrar sesión</a>". "</h2>";
echo "</div>";


?>