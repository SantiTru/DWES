<?php
session_start();

if (
    isset($_POST['usuario']) && isset($_POST['password']) && isset($_POST['password2'])
) {
    $usuario = strtolower($_POST['usuario']);
    $password = hash('sha512', $_POST['password']);
    $password2 = hash('sha512', $_POST['password2']);

    if ($password == $password2) {
        // Conexión a la base de datos y registro del usuario
        try {
            $host = "db";
            $dbUsername = "root";
            $dbPassword = "test";
            $dbName = "usuarios";
            $conn = new PDO("mysql:host=$host;dbname=$dbName", $dbUsername, $dbPassword);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $statement = $conn->prepare('SELECT * FROM usuario WHERE usuario = :usuario LIMIT 1');
            $statement->execute(array(':usuario' => $usuario));
            $resultado = $statement->fetch();

            if ($resultado) {
                echo "<div style='text-align: center; margin-top: 3%'>";
                echo "El usuario ya existe. Por favor, elige otro nombre de usuario.";
                echo "<h4>" . "<a href='registro.php'>Elegir otro usuario</a>" . "</h>";
            } else {
                // Registro del usuario en la base de datos
                $statement = $conn->prepare('INSERT INTO usuario (usuario, password) VALUES (:usuario, :password)');
                $statement->execute(array(
                    ':usuario' => $usuario,
                    ':password' => $password
                ));
            }
            header("Location: login.php");
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    } else {
        echo "Las contraseñas no coinciden";
    }
} else {
    // Manejo de errores en caso de datos faltantes
    // $errores .= '<li>Rellena todos los datos correctamente</li>';
}

require 'views/registro.view.php';
