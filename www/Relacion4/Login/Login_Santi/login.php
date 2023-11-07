<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuarios = json_decode(file_get_contents('usuarios.json'), true);
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

    foreach ($usuarios as $user) {
        if ($user['usuario'] === $usuario && $user['password'] === $password) {
            $_SESSION['usuario'] = $usuario;
            header('Location: contenido.php');
            exit();
        }
    }
    echo "<p style= 'color: red; font-size: 25px';>Usuario o contraseña incorrectos.</p>";
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link href="Style/style.css" rel="stylesheet">
</head>

<body>

    <div id="contenedor">
        <div id="log" style="display:block;">
            <h2>Iniciar sesión</h2>
            <form action="login.php" method="post">
                Usuario: <input type="text" name="usuario"><br>
                Contraseña: <input type="password" name="password"><br>
                <input type="submit" value="Iniciar sesión">
            </form>
            <br>
            <p>¿Nuevo usuario? <a href="registro.php">Registrar</a></p>
        </div>
    </div>
</body>

</html>