<?php
session_start();

// Cargar modelos, vistas y controladores
include("./configs/db.php");
include("model/TareaModel.php");
include("view/TareaView.php");
include("controller/TareaController.php");


// Verificar si el usuario está autenticado
if (!isset($_SESSION['usuario_id'])) {
    header("Location: login.php");
    exit();
}

include("./view/header.php");
include("./view/nav.php");

// Obtener el usuario_id de la sesión
$usuario_id = $_SESSION['usuario_id'];

// Crear instancias de modelos, vistas y controladores
$tareaModel = new TareaModel($conexion);
$tareaView = new TareaView();
$tareaController = new TareaController($tareaModel, $tareaView);

// Obtener el valor de $id según la lógica de tu aplicación
$id = $tareaController->valor_id();  // Usa el método del controlador

// Lógica de la aplicación
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Si se ha enviado un formulario, procesar la tarea
    $tareaController->saveTarea($_POST['titulo'], $_POST['descripcion'], $usuario_id);
}

// Obtener todas las tareas del usuario actual
$tareas = $tareaController->getTarea($usuario_id);

// Mostrar la vista con las tareas
$tareaView->showTasksForm($tareas);  // Mostrar formulario para ingresar tareas

// Enlaces para cerrar sesión
echo '<a href="logout.php">Cerrar Sesión</a>';

// Verificar si hay tareas antes de iterar sobre ellas
if (!empty($tareas)) {
    foreach ($tareas as $task) {
        echo "<div>";
        echo "<p>Título: " . $task['titulo'] . "</p>";
        echo "<p>Descripción: " . $task['descripcion'] . "</p>";
        echo "<p>ID: " . $task['id'] . "</p>";
        // Agregar botones de editar y eliminar con enlaces a acciones.php
        echo "<a href='acciones.php?action=editar&id={$task['id']}'>Editar </a>";
        echo "<a href='acciones.php?action=eliminar&id={$task['id']}'> Borrar</a>";
        echo "</div>";
    }
} else {
    echo "<p>No hay tareas registradas.</p>";
}

include("./view/footer.php");