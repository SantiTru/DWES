<?php
include_once("../models/ToDoModel.php");

class ToDoController extends ToDoModel
{
  public function view_todos() {
    return $this->all_todos();
  }

  public function add_todo($titulo, $descripcion) {
    return $this->todo_add($titulo, $descripcion);
  }

  public function edit_todo($id) {
    return $this->todo_edit($id);
  }

  public function update_todo($id, $titulo, $descripcion) {
    return  $this->todo_update($id, $titulo, $descripcion);
  }

  public function delete_todo($id) {
    return $this->todo_delete($id);
  }
}
?>

