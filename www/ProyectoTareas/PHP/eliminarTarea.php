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

    $borrar = "DELETE FROM usuarios_tarea WHERE tarea = :idTarea AND usuario = (SELECT id FROM usuarios WHERE usuario = :usuario)";
    $tarea_sql = "DELETE FROM tarea WHERE id = :idTarea";
    $verificacion_sql = "SELECT tarea.id FROM tarea INNER JOIN usuarios_tarea ON tarea.id = usuarios_tarea.tarea INNER JOIN usuarios ON usuarios_tarea.usuario = usuarios.id WHERE tarea.id = :idTarea AND usuarios.usuario = :usuario";

    try {
        $conn->beginTransaction();

        $stm = $conn->prepare($verificacion_sql);
        $stm->bindParam(":idTarea", $idTarea, PDO::PARAM_INT);
        $stm->bindParam(":usuario", $usuario, PDO::PARAM_STR);
        $stm->execute();
        $result = $stm->fetch(PDO::FETCH_ASSOC);

        $stm_borrar = $conn->prepare($borrar);
        $stm_borrar->bindParam(":idTarea", $idTarea, PDO::PARAM_INT);
        $stm_borrar->bindParam(":usuario", $usuario, PDO::PARAM_STR);
        $borrar_result = $stm_borrar->execute();

        $stm_tarea = $conn->prepare($tarea_sql);
        $stm_tarea->bindParam(":idTarea", $idTarea, PDO::PARAM_INT);
        $tarea_result = $stm_tarea->execute();

        if ($result && $borrar_result && $tarea_result && $stm_tarea->rowCount() > 0) {
            $conn->commit();
            echo "<body style='background-image: url(../Img/fondo_difuminado_login.jpg);background-repeat: no-repeat; background-size: cover;'>";
            echo "<div style='text-align: center; font-size: 18px; font-weight: bold;'><h2 style='color: black;'>La tarea fue eliminada</h2><a href='contenido.php?id=$idTarea'; style='text-align: center; font-size: 18px; font-weight: bold; color: rgb(14, 14, 134)';>Volver a tus tareas</a></div>";
        } 
    } catch (PDOException $e) {
        $conn->rollBack();
        echo "<body style='background-image: url(../Img/fondo_difuminado_login.jpg); background-repeat: no-repeat; background-size: cover;'>";
        echo "<br><br><p style='text-align: center; font-size: 20px; font-weight: bold; color: black;'>No existe una tarea con ese ID o no está asignada a este usuario.</p>";
        echo "<div style='text-align: center;'><a href='contenido.php'; style='text-align: center; font-size: 18px; font-weight: bold; color: rgb(14, 14, 134)';>Volver a tus tareas</a></div>";
        echo "<br><br>";
        $errorMessage = $e->getMessage();
        error_log("Error: " . $errorMessage);
    } finally {
        $stm = null;
        $stm_borrar = null;
        $stm_tarea = null;
        $conn = null;
    }
}
?>
