<?php
session_start();

include("./app/models/UserModel.php");
include("./app/views/UserView.php");
include("./app/controllers/UserController.php");
include("./configs/Database.php");

$userModel = new UserModel($conn);
$userView = new UserView();
$userController = new UserController($userModel, $userView);

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['usuario']) && isset($_POST['password'])) {
    $userController->procesarLogin();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link href="loggin/estilos/estilo1.css" rel="stylesheet">
</head>
<body>
    <?php
    $userView->showLoginForm();
    ?>
</body>
</html>