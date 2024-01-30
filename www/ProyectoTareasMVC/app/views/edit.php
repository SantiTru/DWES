<?php 
    include "./header.php";
    include "./nav.php";
    include_once("../controllers/ToDoController.php");
?>

<?php 
    $todos = new ToDoController();
    $todo = $todos->edit_todo($_GET['id']);
?>

<div class="container">
    <a href="index.php"><button class="btn btn-primary">Volver</button></a>
    <div class="card">
        <div>
            Actualizar tarea
        </div>
        <div>

            <?php 
                if(isset($_POST['todo_update'])){
                    $id = $_GET['id'];
                    $topic = $_POST['update_topic'];
                    $todo_data = $_POST['update_todo'];  

                    $update_todo = new ToDoController();
                    $update_todo->todo_update($id, $topic, $todo_data); 
                }
            ?>

            <form action="" method="POST">
                <label for="Topic">Titulo : </label>
                <input type="text" name="update_topic" value="<?= $todo['titulo']?>" id="">  
                <br>
                <label for="todo">Descripción : </label>
                <textarea name="update_todo"><?= $todo['descripcion']; ?></textarea>  
                <br>
                <input type="submit" value="Actualizar tarea" name="todo_update" class="btn btn-success">

            </form>
        </div>
    </div>
</div>

<?php
 include "./footer.php";
 ?>