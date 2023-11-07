<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuarios = json_decode(file_get_contents('usuarios.json'), true);
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

    // Verificar si el usuario ya existe
    foreach ($usuarios as $user) {
        if ($user['usuario'] === $usuario) {
            echo "El usuario ya existe. Por favor, elige otro nombre de usuario.";
            exit();
        }
    }

    // Agregar el nuevo usuario al array
    $usuarios[] = array('usuario' => $usuario, 'password' => $password);

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
    <link rel="stylesheet" href="estilos/estilo2.css">
</head>
<body>
  <div id="registro" style="display: block;">
    <h2>Registro de Usuario</h2>
    <form action="registro.php" method="post">
        Usuario: <input type="text" name="usuario"><br>
        Contraseña: <input type="password" name="password"><br>
        <input type="submit" value="Registrar">
    </form>
  </div>
</body>
</html>