<?php
session_start();


if (isset($_POST['usuario']) && isset($_POST['password'])) {
  
  $usuario = strtolower($_POST['usuario']);
  $password = hash('sha512', $_POST['password']);

    try {
      
    require './Connex_BD/connexion.php';

    $statement = $conn->prepare('SELECT * FROM usuarios WHERE usuario = :usuario AND password = :password');
    $statement->execute(array(':usuario' => $usuario, ':password' => $password));
    $resultado = $statement->fetch(PDO::FETCH_ASSOC);

    if ($resultado) {
        $_SESSION['usuario'] = $usuario;
        header("Location: contenido.php");
        exit; 
    } else {
      echo "<body style='background-image: url(../Img/fondo_difuminado_login.jpg); background-repeat: no-repeat; background-size: cover;'>";
      echo "<p style= 'color: red; font-size: 28px; text-align:center; margin-top: 4%; margin-bottom: 0%';>Usuario o contraseña incorrectos.</p><br><br>";
      echo "<p style= 'color: black; font-size: 25px; text-align:center; margin-top: 2%; margin-bottom: 0%';>¿Tienes cuenta?.<a href='../index.php' style='font-size: 20px; font-weight: bold; color: rgb(14, 14, 134);'>¡Registrate!</a></p><br><br>";
      echo "<p style= 'color: black; font-size: 25px; text-align:center; margin-top: 2%; margin-bottom: 0%';>O también puedes...<a href='../index.php' style='font-size: 20px; font-weight: bold; color: rgb(14, 14, 134);'>¡Volver a intentarlo!</a></p><br><br>";
      return;
    }
    } catch (PDOException $e) {
      echo "Error: " . $e->getMessage();
    };
  }
  include '../Views/login.view.html';