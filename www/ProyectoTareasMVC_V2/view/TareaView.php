<?php
class TareaView
{
    public function showTareasForm()
    {
?>
        <div class="container p-4">
            <div class="col_4">
                <div class="card-body">
                    <form action="index.php" method="post">
                        <div class="form-group">
                            <input type="text" name="titulo" class="task" placeholder="Titulo" autofocus>
                        </div>
                        <div class="form-group">
                            <textarea name="descripcion" rows="10" class="description" placeholder="Descripción" autofocus></textarea>
                        </div>
                        <input type="submit" class="enviar" name="save_task" value="Guardar">
                    </form>
                </div>
            </div>
        </div>
        <?php
    }

    public function showTareas($tareas)
    {
        if (empty($tareas)) {
            echo "<p>No hay tareas y esto usa  el TareaView.</p>";
        } else {
        ?>
            <div class="informacion">
                <table style="width: 100%; border-collapse: collapse; margin-top: 20px;">
                    <tr>
                        <th style="background-color: #f2f2f2; border: 1px solid #ddd; padding: 8px; text-align: left;">ID</th>
                        <th style="background-color: #f2f2f2; border: 1px solid #ddd; padding: 8px; text-align: left;">Titulo</th>
                        <th style="background-color: #f2f2f2; border: 1px solid #ddd; padding: 8px; text-align: left;">Descripción</th>
                        <th style="background-color: #f2f2f2; border: 1px solid #ddd; padding: 8px; text-align: left;">Acciones</th>
                    </tr>
                    <?php foreach ($tareas as $row) : ?>
                        <tr>
                            <td style="border: 1px solid #ddd; padding: 8px;"><?php echo $row['id'] ?></td>
                            <td style="border: 1px solid #ddd; padding: 8px;"><?php echo $row['titulo'] ?></td>
                            <td style="border: 1px solid #ddd; padding: 8px;"><?php echo $row['descripcion'] ?></td>
                            <td style="border: 1px solid #ddd; padding: 8px;">
                                <a href="acciones.php?action=editar&id=<?php echo $row['id']; ?>" style="display: inline-block; padding: 5px 10px; text-decoration: none; color: #fff; border-radius: 3px; background-color: #5bc0de;">Editar</a>
                                <a href="acciones.php?action=eliminar&id=<?php echo $row['id']; ?>" style="display: inline-block; padding: 5px 10px; text-decoration: none; color: #fff; border-radius: 3px; background-color: #d9534f;">Borrar</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        <?php
        }
    }


    public function showEditForm($id, $titulo, $descripcion)
    {
        include("./view/header.php");
        include("./view/nav.php");
    
        ?>
        <div class="container">
            <div class="col_4">
                <div class="card-body">
                <form action="acciones.php?action=update&id=<?php echo $id; ?>" method="POST">
                <input type="hidden" name="update_task" value="1">
                        <div class="form-group">
                            <input type="text" name="titulo" value="<?php echo $titulo; ?>">
                        </div>
                        <div class="form-group">
                            <textarea name="descripcion" rows="2"><?php echo $descripcion; ?></textarea>
                        </div>
                        <input type="submit" name="update" value="Modificar" class="enviar">
                    </form>
                    <button class="volver" onclick="window.location.href = 'index.php';">Volver</button>
                </div>
            </div>
        </div>
    
        <?php
    
        include("./view/footer.php");
    }
}
?>