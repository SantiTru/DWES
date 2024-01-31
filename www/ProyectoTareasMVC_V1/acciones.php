<?php
session_start();
require_once("./configs/db.php");
require_once("model/TareaModel.php");

$db = new PDO('mysql:host=db;dbname=tareas', 'root', 'test');
$tareaModel = new TareaModel($db);

$action = $_GET['action']; // Asegúrate de obtener la acción correctamente
$id = $_GET['id']; // Asegúrate de obtener el ID correctamente
$usuario_id = $_SESSION['usuario_id']; // Asegúrate de obtener el ID del usuario correctamente

if ($action == 'editar') {
    // Obtén la tarea para prellenar el formulario de edición
    $tarea = $tareaModel->editTarea($id);

    // Muestra el formulario de edición (puedes redirigir a otra página o mostrar el formulario aquí)
    echo "<form action='acciones.php?action=actualizar&id={$id}' method='post'>";
    echo "<input type='text' name='titulo' value='{$tarea['titulo']}'><br>";
    echo "<textarea name='descripcion'>{$tarea['descripcion']}</textarea><br>";
    echo "<input type='submit' name='update_task' value='Actualizar'>";
    echo "</form>";

} elseif ($action == 'eliminar') {
    // Lógica para eliminar una tarea
    $tareaModel->deleteTarea($id);
    $_SESSION['mensaje'] = 'Tarea eliminada correctamente';
    header("Location: index.php");
    exit();
} elseif ($action == 'actualizar') {
    // Lógica para actualizar una tarea
    if (isset($_POST['update_task'])) {
        $titulo = $_POST['titulo'];
        $descripcion = $_POST['descripcion'];

        // Verifica si los campos están en blanco
        if (empty($titulo) || empty($descripcion)) {
            $_SESSION['mensaje'] = 'Por favor, completa todos los campos';
            header("Location: index.php");
            exit();
        }

        // Actualiza la tarea en la base de datos
        $tareaModel->updateTarea($id, $titulo, $descripcion);

        $_SESSION['mensaje'] = 'Tarea actualizada correctamente';
        header("Location: index.php");
        exit();
    }
}

