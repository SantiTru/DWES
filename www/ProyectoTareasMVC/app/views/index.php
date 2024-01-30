<?php
include "./header.php";
include "./nav.php";

include_once("../controllers/ToDoController.php");
?>


<div class="container">

  <div class="card">
    <div>Añadir tarea</div>
    <div>
      <?php
      if (isset($_POST['add_todo'])) {
        $titulo = $_POST['topic'];  // Cambiado a 'titulo' para coincidir con el modelo
        $descripcion = $_POST['todo'];  // Cambiado a 'descripcion' para coincidir con el modelo

        $add_todo = new ToDoController();
        $add_todo->todo_add($titulo, $descripcion);  // Cambiado a 'todo_add' para coincidir con el modelo
      }
      ?>

      <form action="" method="POST">
        <label for="topic">Titulo : </label>
        <input type="text" name="topic" id="" class="form-control" required><br>

        <label for="todo">Descripción : </label>
        <textarea name="todo" id="" class="form-control areatext" required></textarea><br>

        <input type="submit" value="Add Todo" name="add_todo" class="btn btn-success">
      </form>
    </div>
  </div>

  <hr>

  <h2>Tareas del usuario</h2>

  <?php
  if (isset($_POST['delete_todo'])) {
    $id = $_POST['delete_id'];

    $delete_todo = new ToDoController();
    $delete_todo->todo_delete($id);
  }
  ?>

  <ul class="list-group list-group">
    <?php
    $todos = new ToDoController();
    $all_todos = $todos->view_todos();

    foreach ($all_todos as $todo) {
    ?>

<li class="list-group-item">
  <div>
    <div><?= $todo['titulo']; ?></div>
    <?= $todo['descripcion']; ?>
  </div>
  <div class="buttons-container">
    <a href="edit.php?id=<?= $todo['id']; ?>" class="btn btn-warning">Editar</a>
    <form action="" method="POST" class="delete-form">
      <input type="hidden" name="delete_id" value="<?= $todo['id']; ?>">
      <button type="submit" name="delete_todo" class="btn btn-danger">Borrar</button>
    </form>
  </div>
</li>


    <?php
    }
    ?>
  </ul>
</div>

<?php
 include "./footer.php";
 ?>