<?php
// index.php - Página principal

// Inicia la sesión
session_start();

// Verifica si el usuario está autenticado
if (isset($_SESSION['usuario'])) {
    header("Location: content.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Página de Inicio</title>
</head>

<body>
    <h1>Bienvenido a nuestra aplicación</h1>
    <p><a href="login.php">Iniciar Sesión</a></p>
    <p><a href="register.php">Registrarse</a></p>
</body>

</html>
