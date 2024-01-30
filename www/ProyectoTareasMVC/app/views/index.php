<?php
include "./header.php";
include "./nav.php";

include_once("../controllers/ToDoController.php");
?>


<div class="container">

  <div class="card">
    <div class="card-header">Añadir tarea</div>
    <div class="card-body">
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

  <h2 class="text-center">Tareas del usuario</h2>

  <?php
  if (isset($_POST['delete_todo'])) {
    $id = $_POST['delete_id'];

    $delete_todo = new ToDoController();
    $delete_todo->todo_delete($id);  // Cambiado a 'todo_delete' para coincidir con el modelo
  }
  ?>

  <ul class="list-group list-group">
    <?php
    $todos = new ToDoController();
    $all_todos = $todos->view_todos();

    foreach ($all_todos as $todo) {
    ?>

      <li class="list-group-item d-flex justify-content-between align-items-start">
        <div class="ms-2 me-auto">
          <div class="fw-bold"><?= $todo['titulo']; ?></div>
          <?= $todo['descripcion']; ?>
        </div>
        <a href="edit.php?id=<?= $todo['id']; ?>"><button class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> Edit</button></a> &nbsp;
        <form action="" method="POST">
          <input type="hidden" name="delete_id" value="<?= $todo['id']; ?>">
          <button type="submit" name="delete_todo" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i> Delete </button>
        </form>
      </li>


    <?php
    }
    ?>
  </ul>
</div>

<?php
 include "./footer.php";
 ?>