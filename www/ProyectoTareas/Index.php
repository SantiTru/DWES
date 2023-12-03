<?php
session_start();

if (isset($_SESSION['usuario'])) {
    header("Location: ./PHP/contenido.php");
    exit();
}
include 'Views/Index.view.html';
?>