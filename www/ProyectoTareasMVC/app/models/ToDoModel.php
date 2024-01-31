<?php
class ToDoModel
{
  private $db;
  private $id;

  public function __construct()
  {
    $this->db = new Database();
  }

  public function todo_add($titulo, $descripcion)
  {
    if (isset($_POST['save_task'])) {
      $titulo = $_POST['titulo'];
      $descripcion = $_POST['descripcion'];

      // Verifica si los campos están en blanco
      if (empty($titulo) || empty($descripcion)) {
        $_SESSION['mensaje'] = 'Por favor, completa todos los campos';
        header("Location: ../views/contenido.php");
        exit();
      }
      try {

        $sql_insert =  "INSERT INTO tarea (titulo, descripcion) VALUES (:titulo, :descripcion)";
        $sql_insert_exc = $this->db->prepare($sql_insert);
        $sql_insert_exc->bindParam(':titulo', $titulo);
        $sql_insert_exc->bindParam(':descripcion', $descripcion);
        $sql_insert_exc->execute();

        $tarea_id = $this->db->lastInsertId();
        $usuario_id = $_SESSION['usuario_id'];

        $sql_tarea = "INSERT INTO usuarios_tarea (usuario, tarea) VALUES (?, ?)";
        $sql_tarea_exc = $this->db->prepare($sql_tarea);
        $sql_tarea_exc->execute([$usuario_id, $tarea_id]);

        $_SESSION['mensaje'] = 'Tarea creada correctamente';
        header("Location: ../views/contenido.php");
        exit();
      } catch (PDOException $e) {
        die("Error en la consulta: " . $e->getMessage());
      }
    }
  }

  public function all_todos($usuario_id)
  {
    $sql = "SELECT tarea.* FROM tarea
    JOIN usuarios_tarea ON tarea.id = usuarios_tarea.tarea
    WHERE usuarios_tarea.usuario = ?";
    $sql_exc = $this->db->prepare($sql);
    $sql_exc->execute([$usuario_id]);
    $result = $sql_exc->fetchAll(PDO::FETCH_ASSOC);
    return $result;
  }

  public function todo_edit($id)
  {
    $sql = "SELECT * FROM tarea WHERE id = ?";
    $sql_exc = $this->db->prepare($sql);
    $sql_exc->execute([$id]);
    $result = $sql_exc->fetch(PDO::FETCH_ASSOC);
    return $result;
  }

  public function todo_update($id, $titulo, $descripcion)
  {
    try {
      $sql = "UPDATE tarea SET titulo = ?, descripcion = ? WHERE id = ?";
      $sql_exc = $this->db->prepare($sql);
      $sql_exc->execute([$titulo, $descripcion, $id]);
    } catch (PDOException $e) {
      die("Error al actualizar la tarea: " . $e->getMessage());
    }
  }

  public function todo_delete($id)
  {
    try {
      $sql_tarea = "DELETE FROM tarea WHERE id = ?";
      $sql_tarea_exc = $this->db->prepare($sql_tarea);
      $sql_tarea_exc->execute([$id]);

      $sql_usuarios_tarea = "DELETE FROM usuarios_tarea WHERE tarea = ?";
      $sql_exc = $this->db->prepare($sql_usuarios_tarea);
      $sql_exc->execute([$id]);
    } catch (PDOException $e) {
      die("Error al eliminar la tarea: " . $e->getMessage());
    }
  }
}
