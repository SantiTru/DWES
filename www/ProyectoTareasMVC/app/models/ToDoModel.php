<?php
include_once("../../configs/Database.php");

class ToDoModel {
  private $db;

  public function __construct() {
    $this->db = new Database();
  }

  public function todo_add($titulo, $descripcion) {
    $sql = "INSERT INTO tarea (titulo, descripcion) VALUES (?, ?)";
    $sql_exc = $this->db->prepare($sql);
    return $sql_exc->execute([$titulo, $descripcion]);
  }

  public function all_todos() {
    $sql = "SELECT * FROM tarea";
    $sql_exc = $this->db->prepare($sql);
    $sql_exc->execute();
    $result = $sql_exc->fetchAll(PDO::FETCH_ASSOC);

    return $result;
  }

  public function todo_edit($id) {
    $sql = "SELECT * FROM tarea WHERE id = ?";
    $sql_exc = $this->db->prepare($sql);
    $sql_exc->execute([$id]);
    $result = $sql_exc->fetch(PDO::FETCH_ASSOC);

    return $result;
  }

  public function todo_update($id, $titulo, $descripcion) {
    $sql = "UPDATE tarea SET titulo = ?, descripcion = ? WHERE id = ?";
    $sql_exc = $this->db->prepare($sql);
    return $sql_exc->execute([$titulo, $descripcion, $id]);
  }

  public function todo_delete($id) {
    $sql = "DELETE FROM tarea WHERE id = ?";
    $sql_exc = $this->db->prepare($sql);
    return $sql_exc->execute([$id]);
  }
}
?>
