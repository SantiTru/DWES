<?php
// content.php - Página de contenido

// Inicia la sesión
session_start();

// Verifica si el usuario está autenticado
if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Página de Contenido</title>
</head>

<body>
    <h1>Bienvenido, <?php echo $_SESSION['usuario']; ?>!</h1>
    <p>Este es el contenido de la página.</p>
    <p><a href="profile.php">Ver Perfil</a></p>
    <p><a href="change_password.php">Cambiar Contraseña</a></p>
    <p><a href="logout.php">Cerrar Sesión</a></p>
</body>

</html>

