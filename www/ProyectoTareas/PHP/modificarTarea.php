<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit();
}


require './Connex_BD/connexion.php';

function modificar($conn)
{
    echo "<div style='text-align: center; font-size: 28px; font-weight: bold; color: #0d0e0e;'><br><br>";
    echo "Hola, " . $_SESSION['usuario'] . ". Aquí puedes modificar tu tarea.";
    echo "</div><br><br>";
    
    $row = null;

    try {
        if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
            $idtarea = $_GET['id'];

            $sql = "SELECT tarea.* 
                    FROM tarea 
                    INNER JOIN usuarios_tarea ON tarea.id = usuarios_tarea.tarea 
                    INNER JOIN usuarios ON usuarios_tarea.usuario = usuarios.id 
                    WHERE tarea.id = :idtarea AND usuarios.usuario = :usuario";
            $statement = $conn->prepare($sql);
            $statement->bindParam(":idtarea", $idtarea, PDO::PARAM_INT);
            $statement->bindParam(":usuario", $_SESSION['usuario'], PDO::PARAM_STR);
            $statement->execute();
            $row = $statement->fetch(PDO::FETCH_ASSOC);

            if (!$row) {
                echo "<body style='background-image: url(../Img/fondo_difuminado_login.jpg); background-repeat: no-repeat; background-size: cover;'>";
                echo "<br><br><p style='text-align: center; font-size: 20px; font-weight: bold; color: black;'>No existe una tarea con ese ID o no está asignada a este usuario.</p>";
                echo "<div style='text-align: center;'><a href='contenido.php'; style='text-align: center; font-size: 18px; font-weight: bold; color: rgb(14, 14, 134)';>Volver a tus tareas</a></div>";
                echo "<br><br>";
                exit();
            }
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $idtarea = $_POST['idtarea'];
            $titulo = $_POST['titulo'];
            $descripcion = $_POST['descripcion'];
          
            if (empty($titulo) || strlen($titulo) > 20) {
                echo "<body style='background-image: url(../Img/fondo_difuminado_login.jpg); background-repeat: no-repeat; background-size: cover;'>";
                echo "<br><br><p style='text-align: center; font-size: 20px; font-weight: bold; color: black;'>Los campos no pueden ir vacíos ni excederse del tamaño indicado.</p>";
                echo "<div style='text-align: center;'><a href='contenido.php'; style='text-align: center; font-size: 18px; font-weight: bold; color: rgb(14, 14, 134)';>Volver a tus tareas</a></div>";
                echo "<br><br>";
              exit();
            }
          
            if (empty($descripcion) || strlen($descripcion) > 200) {
                echo "<body style='background-image: url(../Img/fondo_difuminado_login.jpg); background-repeat: no-repeat; background-size: cover;'>";
                echo "<br><br><p style='text-align: center; font-size: 20px; font-weight: bold; color: black;'>Los campos no pueden ir vacíos ni excederse del tamaño indicado.</p>";
                echo "<div style='text-align: center;'><a href='contenido.php'; style='text-align: center; font-size: 18px; font-weight: bold; color: rgb(14, 14, 134)';>Volver a tus tareas</a></div>";
                echo "<br><br>";
              exit();
            }

            $sql = "UPDATE tarea 
                    SET titulo=:titulo, descripcion=:descripcion 
                    WHERE id=:idtarea AND id IN (SELECT tarea FROM usuarios_tarea WHERE usuario = (SELECT id FROM usuarios WHERE usuario = :usuario))";
            $statement = $conn->prepare($sql);
            $statement->bindParam(":titulo", $titulo, PDO::PARAM_STR);
            $statement->bindParam(":descripcion", $descripcion, PDO::PARAM_STR);
            $statement->bindParam(":idtarea", $idtarea, PDO::PARAM_INT);
            $statement->bindParam(":usuario", $_SESSION['usuario'], PDO::PARAM_STR);

            if ($statement->execute()) {
                include '../Views/tareaModificada.view.html';
                exit();
            } 
        }
    } catch (PDOException $e) {
        $conn->rollBack();
        $errorMessage = $e->getMessage();
        error_log("Error: " . $errorMessage);
    }

    return $row;
}

$row = modificar($conn);
$conn = null;

include '../Views/modificarTarea.view.html';
?>