<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuarios = json_decode(file_get_contents('usuarios.json'), true);
    $nombre = $_POST['nombre'];
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

    // Verificar si el usuario ya existe
    foreach ($usuarios as $user) {
        if ($user['usuario'] === $usuario) {
            echo "<div style='text-align: center; margin-top: 3%'>";
            echo "El usuario ya existe. Por favor, elige otro nombre de usuario.";
            echo "<h4>" . "<a href='registro.php'>Elegir otro usuario</a>" . "</h>";
            exit();
        }
    }

    // Agregar el nuevo usuario al array
    $usuarios[] = array('nombre' => $nombre, 'usuario' => $usuario, 'password' => $password);

    // Escribir el array actualizado de usuarios en el archivo JSON
    file_put_contents('usuarios.json', json_encode($usuarios, JSON_PRETTY_PRINT));

    // Redirigir a la página de inicio de sesión
    header('Location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Registro de Usuario</title>
    <link href="Style/style.css" rel="stylesheet">
</head>

<body>
    <div id="registro" style="display: block;">
        <h2>Registro de Usuario</h2>
        <hr>
        <br>
        <form action="registro.php" method="post">
            Nombre completo: <input type="text" name="nombre"><br>
            Usuario: <input type="text" name="usuario"><br>
            Contraseña: <input type="password" name="password"><br>
            <input type="submit" value="Registrar">
            <br>
            <br>
            <hr>
            <br>
            <p>¿Ya tienes cuenta? <a href="login.php">Iniciar sesión</a></p>
        </form>
    </div>
</body>

</html>