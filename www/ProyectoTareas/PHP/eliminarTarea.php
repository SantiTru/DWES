<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit();
}

require "../PHP/Connex_BD/connexion.php";

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $idTarea = $_GET['id'];
    $usuario = $_SESSION['usuario'];

    $verificacion_sql = "SELECT tarea.id FROM tarea INNER JOIN usuarios_tarea ON tarea.id = usuarios_tarea.tarea INNER JOIN usuarios ON usuarios_tarea.usuario = usuarios.id WHERE tarea.id = :idTarea AND usuarios.usuario = :usuario";

    try {
        $conn->beginTransaction();

        $statement = $conn->prepare($verificacion_sql);
        $statement->bindParam(":idTarea", $idTarea, PDO::PARAM_INT);
        $statement->bindParam(":usuario", $usuario, PDO::PARAM_STR);
        $statement->execute();

        if ($statement->rowCount() === 0) {
            throw new Exception("La tarea no está asignada a este usuario.");
        }

        $borrar = "DELETE FROM usuarios_tarea WHERE tarea = :idTarea AND usuario = (SELECT id FROM usuarios WHERE usuario = :usuario)";
        $tarea_sql = "DELETE FROM tarea WHERE id = :idTarea";

        $statement_borrar = $conn->prepare($borrar);
        $statement_borrar->bindParam(":idTarea", $idTarea, PDO::PARAM_INT);
        $statement_borrar->bindParam(":usuario", $usuario, PDO::PARAM_STR);
        $statement_borrar->execute();

        $statement_tarea = $conn->prepare($tarea_sql);
        $statement_tarea->bindParam(":idTarea", $idTarea, PDO::PARAM_INT);
        $statement_tarea->execute();

        $conn->commit();
        echo "<body style='background-image: url(../Img/fondo_difuminado_login.jpg);background-repeat: no-repeat; background-size: cover;'>";
        echo "<div style='text-align: center; font-size: 18px; font-weight: bold;'><h2 style='color: black;'>La tarea fue eliminada</h2><a href='contenido.php?id=$idTarea'; style='text-align: center; font-size: 18px; font-weight: bold; color: rgb(14, 14, 134)';>Volver a tus tareas</a></div>";

    } catch (Exception $e) {
        $conn->rollBack();
        echo "<body style='background-image: url(../Img/fondo_difuminado_login.jpg); background-repeat: no-repeat; background-size: cover;'>";
        echo "<br><br><p style='text-align: center; font-size: 20px; font-weight: bold; color: black;'>Error: " . $e->getMessage() . "</p>";
        echo "<div style='text-align: center;'><a href='contenido.php'; style='text-align: center; font-size: 18px; font-weight: bold; color: rgb(14, 14, 134)';>Volver a tus tareas</a></div>";
        echo "<br><br>";
        $errorMessage = $e->getMessage();
        error_log("Error: " . $errorMessage);

    } finally {
        $statement = null;
        $statement_borrar = null;
        $statement_tarea = null;
        $conn = null;
    }
}
?>
