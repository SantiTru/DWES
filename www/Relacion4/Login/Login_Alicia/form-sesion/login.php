<?php
session_start();

if (isset($_POST['usuario']) && isset($_POST['password'])) {
    // Verificación de credenciales en la base de datos y configuración de la sesión
    $usuario = strtolower($_POST['usuario']);
    $password = hash('sha512', $_POST['password']);

    $host = "db";
    $dbUsername = "root";
    $dbPassword = "test";
    $dbName = "usuarios";
    $conn = new PDO("mysql:host=$host;dbname=$dbName", $dbUsername, $dbPassword);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $statement = $conn->prepare('SELECT * FROM usuario WHERE usuario = :usuario AND password = :password');
    $statement->execute(array(':usuario' => $usuario, ':password' => $password));
    $resultado = $statement->fetch();

    if ($resultado) {
        $_SESSION['usuario'] = $usuario;
        header("Location: contenido.php");
        exit; // Asegurarse de que la ejecución del script se detenga aquí
    } else {
        echo "Usuario o contraseña incorrectos";
    }

}
require 'views/login.view.php';

?>
