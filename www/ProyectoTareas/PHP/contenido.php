<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit();
}

if (isset($_SESSION['usuario']))
{
echo "<div style='text-align: center; font-size: 20px; font-weight: bold; color: #0d0e0e;'><br><br>";
echo "Welcome, " . $_SESSION['usuario']. ". Estas son tus tareas: ";
echo "</div><br><br>"; 

mostrarTareas();
}

function mostrarTareas()
{

    require './Connex_BD/connexion.php';

    if (isset($_SESSION['usuario'])) {
        $usuario = $_SESSION['usuario'];
        $sql = "SELECT tarea.id, tarea.titulo, tarea.descripcion 
                        FROM tarea 
                        INNER JOIN usuarios_tarea ON tarea.id = usuarios_tarea.tarea 
                        INNER JOIN usuarios ON usuarios_tarea.usuario = usuarios.id 
                        WHERE usuarios.usuario = ?";

        $statement = $conn->prepare($sql);
        $statement->execute([$usuario]);
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);

        if (!empty($result)) {
            echo "<table>
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Título</th>
                                    <th>Descripción</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>";

            foreach ($result as $row) {
                echo "<tr>
                                <td>{$row['id']}</td>
                                <td>{$row['titulo']}</td>
                                <td>
                                    <a href='descripcion.php?id={$row['id']}' style='max-width: 30rem; word-wrap: break-word;'>" . substr($row['descripcion'], 0, 10) . "... </a>
                                </td>
                                <td>
                                    <a href='modificar.php?id={$row['id']}'>Modificar</a> | 
                                    <a href='eliminar.php?id={$row['id']}'>Eliminar</a>
                                </td>
                            </tr>";
            }

            echo "</tbody></table>";
        } else {
            echo "<h3><p style='color: #2f9fa5; text-align: center;'>No hay tareas asignadas todavia, agrega alguna para comenzar.</p></h3>";
        }
    }

    $conn = null;
}


include '../Views/contenido.view.html';

