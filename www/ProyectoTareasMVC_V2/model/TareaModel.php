<?php
class TareaModel {
    private $conexion;
    private $id;

    public function __construct($conexion) {
        $this->conexion = $conexion;
    }

    public function getTarea($usuario_id) {

        $query = "SELECT tarea.* FROM tarea
                JOIN usuarios_tarea ON tarea.id = usuarios_tarea.tarea
                WHERE usuarios_tarea.usuario = ?";
        $statement = $this->conexion->prepare($query);
        $statement->execute([$usuario_id]);
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
    

    public function saveTarea($titulo, $descripcion) {
        if (isset($_POST['save_task'])) {
            $titulo = $_POST['titulo'];
            $descripcion = $_POST['descripcion'];
        
            if (empty($titulo) || empty($descripcion)) {
                echo '<script>alert("Es necesario rellenar titulo y descripción");</script>';
                echo '<script>window.location.href = "index.php";</script>';
                exit();
            }
        
            try {

                $query_insertar_tarea = "INSERT INTO tarea (titulo, descripcion) VALUES (:titulo, :descripcion)";
                $statement_insertar_tarea = $this->conexion->prepare($query_insertar_tarea);
                $statement_insertar_tarea->bindParam(':titulo', $titulo);
                $statement_insertar_tarea->bindParam(':descripcion', $descripcion);
                $statement_insertar_tarea->execute();
        

                $tarea_id = $this->conexion->lastInsertId();
        

                $usuario_id = $_SESSION['usuario_id'];
        

                $query_asociar_tarea = "INSERT INTO usuarios_tarea (usuario, tarea) VALUES (?, ?)";
                $statement_asociar_tarea = $this->conexion->prepare($query_asociar_tarea);
                $statement_asociar_tarea->execute([$usuario_id, $tarea_id]);
        
                echo '<script>alert("Tarea guardada!");</script>';
                echo '<script>window.location.href = "index.php";</script>';
                exit();
            } catch (PDOException $e) {
                die("Error en la consulta: " . $e->getMessage());
            }
        }
    }

    public function editTarea($id) {
        $query = "SELECT * FROM tarea WHERE id = ?";
        $statement = $this->conexion->prepare($query);
        $statement->execute([$id]);
        $task = $statement->fetch(PDO::FETCH_ASSOC);
        return $task;
    }

    public function deleteTarea($id) {
        try {

            $query_delete_usuarios_tarea = "DELETE FROM usuarios_tarea WHERE tarea = ?";
            $statement_delete_usuarios_tarea = $this->conexion->prepare($query_delete_usuarios_tarea);
            $statement_delete_usuarios_tarea->execute([$id]);
    

            $query_delete_tarea = "DELETE FROM tarea WHERE id = ?";
            $statement_delete_tarea = $this->conexion->prepare($query_delete_tarea);
            $statement_delete_tarea->execute([$id]);
        } catch (PDOException $e) {
            die("Error al eliminar la tarea: " . $e->getMessage());
        }
    }
    

    public function updateTarea($id, $titulo, $descripcion) {
        try {
            $query = "UPDATE tarea SET titulo = ?, descripcion = ? WHERE id = ?";
            $statement = $this->conexion->prepare($query);
            $statement->execute([$titulo, $descripcion, $id]);
        } catch (PDOException $e) {
            die("Error al actualizar la tarea: " . $e->getMessage());
        }
    }
}
/*
! esto es una prueba de comentario 
* esto es una prueba de comentario 
? esto es una prueba de comentario 
TODO: esto es una prueba de comentario 
esto es una prueba de comentario */

//! Un comentario normal
//* Un comentario normal
//? Un comentario normal
//TODO: Un comentario normal
// Un comentario normal