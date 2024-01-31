<?php
session_start();

include("./configs/db.php");
include("model/TareaModel.php");
include("view/TareaView.php");
include("controller/TareaController.php");


if (!isset($_SESSION['usuario_id'])) {
    header("Location: login.php");
    exit();
}

include("./view/header.php");
include("./view/nav.php");

$usuario_id = $_SESSION['usuario_id'];

$tareaModel = new TareaModel($conexion);
$tareaView = new TareaView();
$tareaController = new TareaController($tareaModel, $tareaView);

$id = $tareaController->valor_id();  

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $tareaController->saveTarea($_POST['titulo'], $_POST['descripcion'], $usuario_id);
}

$tareas = $tareaController->getTarea($usuario_id);


$tareaView->showTareasForm($tareas);  


echo '<a href="./controller/logout.php">Cerrar Sesión</a>';


  $tareaView->showTareas($tareas);


include("./view/footer.php");