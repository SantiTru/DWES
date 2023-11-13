<?php
session_start();

// Verificar si el usuario está autenticado
if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit();
}

// Obtener información del usuario desde el array de usuarios (simulado)
if (isset($_SESSION['usuarios'][$_SESSION['usuario']])) {
    $usuarioActual = $_SESSION['usuarios'][$_SESSION['usuario']];
    $nombreUsuario = $usuarioActual['nombre'];
} else {
    // Manejar el caso en el que no se encuentra la información del usuario
    $nombreUsuario = "Nombre de Usuario Desconocido";
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Perfil del Usuario</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>
    <h1>Bienvenido a tu Perfil, <?php echo $nombreUsuario; ?>!</h1>
    
    <!-- Mostrar información del usuario en formato de tabla -->
    <h2>Información del Usuario</h2>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Usuario</th>
                <th>Contraseña</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Iterar sobre el array de usuarios y construir las filas de la tabla
            foreach ($_SESSION['usuarios'] as $usuario => $infoUsuario) {
                echo "<tr>";
                echo "<td>{$infoUsuario['nombre']}</td>";
                echo "<td>{$usuario}</td>";
                echo "<td>{$infoUsuario['password']}</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>

    <!-- Mostrar enlaces para cambiar la contraseña, volver al contenido y cerrar sesión -->
    <p><a href="change_password.php">Cambiar Contraseña</a></p>
    <p><a href="content.php">Volver al Contenido</a></p>
    <p><a href="logout.php">Cerrar Sesión</a></p>
</body>

</html>
