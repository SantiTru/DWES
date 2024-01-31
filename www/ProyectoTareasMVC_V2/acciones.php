<?php
session_start();
require_once("./configs/db.php");
require_once("model/TareaModel.php");
require_once("./controller/UserController.php");
require_once("view/TareaView.php");


$db = new PDO('mysql:host=db;dbname=tareas', 'root', 'test');
$tareaModel = new TareaModel($db);
$tareaView = new TareaView();

$action = $_GET['action']; 
$id = $_GET['id'];
$usuario_id = $_SESSION['usuario_id']; 

if ($action == 'editar') {
   
    $tarea = $tareaModel->editTarea($id);
    $tareaForm = $tareaView->showEditForm($id, $tarea['titulo'], $tarea['descripcion']);

} elseif ($action == 'eliminar') {
    
    $tareaModel->deleteTarea($id);
    echo '<script>alert("Tarea eliminada");</script>';
    echo '<script>window.location.href = "index.php";</script>';
    exit();
} elseif ($action == 'actualizar') {
    
    if (isset($_POST['updateTarea'])) {
        $id = $_POST['id'];
        $titulo = $_POST['titulo'];
        $descripcion = $_POST['descripcion'];

        
        if (empty($titulo) || empty($descripcion)) {
            echo '<script>alert("Es neceesario rellenar titulo y descripción");</script>';
            echo '<script>window.location.href = "index.php";</script>';
            exit();
        }

        
        $tareaModel->updateTarea($id, $titulo, $descripcion);

        echo '<script>alert("Tarea editada!!");</script>';
        echo '<script>window.location.href = "index.php";</script>';
        exit();
    }
}

