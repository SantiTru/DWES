<?php

include("view/UserView.php");
include("./configs/db.php");
include("model/UserModel.php");

$userModel = new UserModel($conexion);
$userView = new UserView(); 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $result = $userModel->insertUser($_POST['usuario'], $_POST['password']);

    if ($result) {
        echo '<script>alert("Se ha registrado tu usuario en Atarea2. Ya puedes logarte.");</script>';
        echo '<script>window.location.href = "index.php";</script>';
        exit;
    } else {
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
