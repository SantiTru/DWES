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
        $task = $this->model->getTarea($id);

        $this->view->showTarea($task['titulo'], $task['descripcion']);
    }

    public function showTareaForm($id) {
        $task = $this->model->getTarea($id);

        $this->view->showTareaForm($id, $task['titulo'], $task['descripcion']);
    }

    public function saveTarea($titulo, $descripcion, $usuario_id) {
        $this->model->saveTarea($titulo, $descripcion, $usuario_id);
        $this->redirect('index.php');
    }

    public function updateTarea($id, $titulo, $descripcion) {
        $this->model->updateTarea($id, $titulo, $descripcion);
        $this->redirect('index.php');
    }

    public function deleteTarea($id) {
        $this->model->deleteTarea($id);
        $this->redirect('index.php');
    }

    public function valor_id() {
        return isset($_POST['id']) ? $_POST['id'] : null;
    }
}
?>
