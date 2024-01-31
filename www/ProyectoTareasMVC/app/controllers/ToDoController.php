<?php
class ToDoController {

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

  public function get_todos($usuario_id) {
    return $this->model->all_todos($usuario_id);
  }
 
  public function show_todo($id) {
    $task= $this->model->all_todos($id);
    $this-> view->show_todo($task['titulo'], $task['descripcion']);
  }

  public function show_todo_form($id) {
    $task= $this->model->all_todos($id);

    $this->view->show_todo_form($id, $task['titulo'], $task['descripcion']);
  }
  public function add_todo($titulo, $descripcion, $usuario_id) {
    $this->model->todo_add($titulo, $descripcion, $usuario_id);
    $this->redirect('./views/contenido.php');
  }

  public function edit_todo($id, $titulo, $descripcion) {
    $this->model->edit_todo($id, $titulo, $descripcion);
    $this->redirect('./views/contenido.php');
  }

  public function delete_todo($id) {
    $this->model->delete_todo($id);
    $this->redirect('./views/contenido.php');
  }

  public function value_id() {
    return isset($_POST['id']) ? $_POST['id'] : null;
  }
}
?>

