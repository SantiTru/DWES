<?php
session_start();

// Cargar modelos, vistas y controladores
include("./configs/Database.php");
include("./app/models/ToDoModel.php");
include("./app/views/Contenido.php");
include("./app/controllers/ToDoController.php");

// Verificar si el usuario está autenticado
if (!isset($_SESSION['usuario_id'])) {
    header("Location: login.php");
    exit();
}

// Obtener el usuario_id de la sesión
$usuario_id = $_SESSION['usuario_id'];

// Crear instancias de modelos, vistas y controladores
$todoModel = new ToDoModel($conexion);
$todoView = new Contenido();
$todoController = new ToDoController($todoModel, $todoView);

// Obtener el valor de $id según la lógica de tu aplicación
$id = $odoController->value_id();  // Usa el método del controlador

// Lógica de la aplicación
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Si se ha enviado un formulario, procesar la tarea
    $todoController->add_todo($_POST['titulo'], $_POST['descripcion'], $usuario_id);
}

// Obtener todas las tareas del usuario actual
$tareas = $todoController->get_todos($usuario_id);

// Mostrar la vista con las tareas
$todoView->showTodoForm($tareas);  // Mostrar formulario para ingresar tareas

// Enlaces para cerrar sesión
echo '<a href="login.php">Cerrar Sesión</a>';

// Verificar si hay tareas antes de iterar sobre ellas
if (!empty($tareas)) {
    foreach ($tareas as $task) {
        echo "<div>";
        echo "<p>Título: " . $task['titulo'] . "</p>";
        echo "<p>Descripción: " . $task['descripcion'] . "</p>";
        echo "<p>ID: " . $task['id'] . "</p>";
        // Agregar botones de editar y eliminar con enlaces a acciones.php
        echo "<a href='acciones.php?action=editar&id={$task['id']}'>Editar</a>";
        echo "<a href='acciones.php?action=eliminar&id={$task['id']}'>Eliminar</a>";
        echo "</div>";
    }
} else {
    echo "<p>No hay tareas registradas.</p>";
    
}

// Tareas MVC 
//     @Author: SantiTru
//     @version: 1.0
//     @date: 2024-01-29
//     @url: https://github.com/SantiTru/DWES/tree/main/www/ProyectoTareasMVC
//     @description: Programa básico de tareas con patrón MVC y uso de objetos.