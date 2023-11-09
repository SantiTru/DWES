<?php
session_start();

if (isset($_POST['usuario']) && isset($_POST['password'])) {
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

    $usuario = strtolower($_POST['usuario']);
    $password = hash('sha512', $_POST['password']);
    try {
      //code...
      $host = "db";
      $dbUsername = "root";
      $dbPassword = "test";
      $dbName = "usuarios";
      $conn = new PDO("mysql:host=$host;dbname=$dbName", $dbUsername, $dbPassword);
      // set the PDO error mode to exception
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
      $statement = $conn->prepare('SELECT * FROM Usuario WHERE Usuario = :usuario AND Password = :password');
      $statement->execute(array(':usuario' => $usuario, ':password' => $password));
      $resultado = $statement->fetch();
      if ($resultado) {
        $_SESSION['usuario'] = $usuario;
        header("Location: contenido.php");
      } else {
        header("Location: registro.php");
      }
    } catch (PDOException $e) {
      echo "Error: " . $e->getMessage();
    };
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
            <hr>
            <br>
            <form action="login.php" method="post">
                Usuario: <input type="text" name="usuario"><br>
                Contraseña: <input type="password" name="password"><br>
                <input type="submit" value="Iniciar sesión">
            </form>
            <br>
            <br>
            <hr>
            <br>
            <p>¿Nuevo usuario? <a href="./registro.php">Registrar</a>
        </div>
    </div>
</body>

</html>