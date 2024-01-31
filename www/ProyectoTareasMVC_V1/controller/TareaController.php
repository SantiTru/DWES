<?php
class TareaController {
    private $model;
    private $view;

    public function __construct($model, $view) {
        $this->model = $model;
        $this->view = $view;
    }

    public function redirect($url) {
        header("Location: $url");
        exit();
    }

    public function getTarea($usuario_id) {
        return $this->model->getTarea($usuario_id);
    }

    public function showTarea($id) {
        // Obtener la tarea del modelo según el ID
        $task = $this->model->getTarea($id);

        // Mostrar la tarea utilizando la vista
        $this->view->showTarea($task['titulo'], $task['descripcion']);
    }

    public function showTareaForm($id) {
        // Obtener la tarea del modelo según el ID (si es necesario)
        $task = $this->model->getTarea($id);

        // Mostrar el formulario de tarea utilizando la vista
        $this->view->showTareaForm($id, $task['titulo'], $task['descripcion']);
    }

    public function saveTarea($titulo, $descripcion, $usuario_id) {
        // Implementar la lógica para guardar una tarea asociada a un usuario
        $this->model->saveTarea($titulo, $descripcion, $usuario_id);
        $this->redirect('index.php');
    }

    public function updateTarea($id, $titulo, $descripcion) {
        // Implementar la lógica para actualizar una tarea
        $this->model->updateTarea($id, $titulo, $descripcion);
        $this->redirect('index.php');
    }

    public function deleteTarea($id) {
        // Implementar la lógica para borrar una tarea
        $this->model->deleteTarea($id);
        $this->redirect('index.php');
    }

    public function valor_id() {
        return isset($_POST['id']) ? $_POST['id'] : null;
    }
}
?>
