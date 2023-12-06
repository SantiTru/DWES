<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit();
}

echo "<div style='text-align: center; font-size: 28px; font-weight: bold; color: #0d0e0e;'><br><br>";
echo "Hola, " . $_SESSION['usuario'] . ". Aqui puedes agregar tus tareas.";
echo "</div><br><br>";

function agregarTarea()
{
    require "../PHP/Connex_BD/connexion.php";

    $titulo = $_POST['titulo'];
    $descripcion = $_POST['descripcion'];
    $usuario = $_SESSION["usuario"];

    if (
        empty($titulo) || empty($descripcion) ||
        strlen($titulo) > 20 || strlen($descripcion) > 200 ||
        !preg_match('/^[A-Za-z0-9\s.,!?¿¡áéíóúÁÉÍÓÚñÑüÜ]+$/', $titulo) ||
        !preg_match('/^[A-Za-z0-9\s.,!?¿¡áéíóúÁÉÍÓÚñÑüÜ]+$/', $descripcion)
    ) {
        echo "<body style='background-image: url(../Img/fondo_difuminado_login.jpg); background-repeat: no-repeat; background-size: cover;'>";
        echo "<div style='text-align: center;'>";
        echo "<p style='color: red; font-size: 28px; margin-top: 4%; margin-bottom: 0%;'>Los campos no pueden ir vacíos ni excederse del tamaño indicado.</p><br><br>";
        echo "<div style='margin-top: 20px;'>";
        echo "<a href='agregar.php' style='font-size: 20px; font-weight: bold; color: rgb(14, 14, 134);'>Intentarlo de nuevo</a>";
        echo "</div>";
        echo "</div>";

        return;
    }

    try {
        $usuarioConsulta = "SELECT id FROM usuarios WHERE usuario = :usuario";
        $stmtUsuario = $conn->prepare($usuarioConsulta);
        $stmtUsuario->bindParam(':usuario', $usuario);
        $stmtUsuario->execute();

        if ($stmtUsuario->rowCount() > 0) {
            $filaUsuario = $stmtUsuario->fetch(PDO::FETCH_ASSOC);
            $idusuario = $filaUsuario['id'];

            // Insertar tarea
            $insertarT = "INSERT INTO tarea (titulo, descripcion) VALUES (:titulo, :descripcion)";
            $stmtInsertarT = $conn->prepare($insertarT);
            $stmtInsertarT->bindParam(':titulo', $titulo);
            $stmtInsertarT->bindParam(':descripcion', $descripcion);

            if ($stmtInsertarT->execute()) {
                $idTarea = $conn->lastInsertId();

                // Asignar tarea al usuario
                $asignaT = "INSERT INTO usuarios_tarea (tarea, usuario) VALUES (:idTarea, :idusuario)";
                $stmtAsignaT = $conn->prepare($asignaT);
                $stmtAsignaT->bindParam(':idTarea', $idTarea);
                $stmtAsignaT->bindParam(':idusuario', $idusuario);

                if ($stmtAsignaT->execute()) {
                    mostrar();
                }
            }
        }
    } catch (PDOException $e) {

        echo "Error: " . $e->getMessage();
    } finally {
        $conn = null;
    }
}

function mostrar()
{
    include '../Views/tareaAgregada.view.html';
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    agregarTarea();
} else {

    include '../Views/agregar.view.html';
}
