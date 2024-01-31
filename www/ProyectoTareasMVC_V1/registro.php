<?php

include("view/UserView.php");
include("./configs/db.php");
include("model/UserModel.php");

$userModel = new UserModel($conexion);
$userView = new UserView(); 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $result = $userModel->insertUser($_POST['usuario'], $_POST['password']);

    if ($result) {
        // Registro exitoso, redirigir a la página de inicio de sesión
        header("Location: login.php");
        exit;
    } else {
        // Mostrar mensaje de error o realizar otras acciones
        echo "Error en el registro";
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Registro de Usuario</title>
    <link rel="stylesheet" href="./public/Style/style.css">
</head>
<body>
    <?php
    $userView->showRegistrationForm();
    include("./view/footer.php");
    ?>
</body>
</html>
