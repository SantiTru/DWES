<?php
session_start();
$errores = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Verificar si todas las variables POST requeridas están definidas y no están vacías
    if (
        isset($_POST['usuario']) &&
        isset($_POST['password']) && isset($_POST['password2']) &&
        !empty($_POST['usuario']) &&
        !empty($_POST['password']) && !empty($_POST['password2'])
    ) {
        
        $usuario = strtolower($_POST['usuario']);
        $password = hash('sha512', $_POST['password']);
        $password2 = hash('sha512', $_POST['password2']);

        if ($password == $password2) {
            // Conexión a la base de datos y registro del usuario
            try {
                require './Connex_BD/connexion.php';

                $statement = $conn->prepare('SELECT * FROM usuarios WHERE usuario = :usuario LIMIT 1');
                $statement->execute(array(':usuario' => $usuario));
                $resultado = $statement->fetch();

                if ($resultado) {
                    echo "<p style= 'color: red; font-size: 28px; text-align:center; margin-top: 4%; margin-bottom: 0%';>El usuario ya existe. Por favor, elige otro nombre de usuario.</p><br><br>";
                } else {
                    // Registro del usuario en la base de datos
                    $statement = $conn->prepare('INSERT INTO usuarios (usuario, password) VALUES (:usuario, :password)');
                    $statement->execute(array(
                        ':usuario' => $usuario,
                        ':password' => $password
                    ));
                    echo "<p style= 'color: green; font-size: 28px; text-align:center; margin-top: 4%; margin-bottom: 0%';>Usuario registrado correctamente.</p><br><br>";
                }
            } catch (PDOException $e) {
                echo "Error: " . $e->getMessage();
            }
        } else {
            echo "<p style= 'color: red; font-size: 28px; text-align:center; margin-top: 4%; margin-bottom: 0%';>Fallo en el registro. Las contraseñas no coinciden.</p><br><br>";
        }
    } else {
        // Manejo de errores en caso de datos faltantes
        echo "<p style= 'color: red; font-size: 28px; text-align:center; margin-top: 4%; margin-bottom: 0%';>Por favor, rellena todos los datos correctamente.</p><br><br>";
    }
}
include '../Views/registro.view.html';