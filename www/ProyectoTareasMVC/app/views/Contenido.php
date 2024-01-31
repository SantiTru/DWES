<?php
include "./header.php";
include "./nav.php";

class Contenido{
  public function showTodoForm() {
    ?>
    <div class="container p-4">
        <div class="col_4">
            <div class="card-body">
                <form action="index.php" method="post">
                    <div class="form-group">
                        <input type="text" name="titulo" class="task" placeholder="Task Title" autofocus>
                    </div>
                    <div class="form-group">
                        <textarea name="descripcion" rows="10" class="description" placeholder="Task Description" autofocus></textarea>
                    </div>
                    <input type="submit" class="enviar" name="save_task" value="Guardar">
                </form>
            </div>
        </div>
    </div>
    <?php
}

  public function showTodos($todos) {
    if (empty($todos)) {
      echo "<p>No hay tareas registradas para este usuario.</p>";
    } else {
      ?>
      <div class="informacion">
          <table border="2">
              <tr>
                  <th>ID</th>
                  <th>Titulo</th>
                  <th>Descripción</th>
                  <th>Acciones</th>
              </tr>
              <tbody>
                  <?php foreach ($todos as $row) : ?>
                      <tr>
                          <td><?php echo $row['id'] ?></td>
                          <td><?php echo $row['titulo'] ?></td>
                          <td><?php echo $row['descripcion'] ?></td>
                          <td>
                              <a href="edit_task.php?id=<?php echo $row['id'] ?>" class="boton-editar">Editar</a>
                              <a href="delete_task.php?id=<?php echo $row['id'] ?>" class="boton-borrar">Borrar</a>
                          </td>
                      </tr>
                  <?php endforeach; ?>
              </tbody>
          </table>
      </div>
      <?php
  }
}

  public function showEditForm($todos) {
    ?>
        <div class="container">
    <div class="col_4">
        <div class="card-body">
            <form action="edit_task.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <div class="form-group">
                    <input type="text" name="titulo" value="<?php echo $titulo; ?>" placeholder="Actualizar título">
                </div>
                <div class="form-group">
                    <textarea name="descripcion" rows="2" placeholder="Actualizar descripción"><?php echo $descripcion; ?></textarea>
                </div>
                <input type="submit" name="update" value="Modificar" class="enviar">
            </form>
        </div>
    </div>
</div>
        <?php
  }
}





?>




  

  
<?php
 include "./footer.php";
 ?>
