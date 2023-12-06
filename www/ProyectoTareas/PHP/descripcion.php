<?php
session_start();

echo "<div style='text-align: center; font-size: 30px; font-weight: bold; color: #0d0e0e;'><br><br>";
echo "Hola, " . $_SESSION['usuario'] . ". Esta es la descripción de tu tarea: ";
echo "</div><br><br>"; 

function descripcionTarea()
{
    require "../PHP/Connex_BD/connexion.php";

    if (isset($_GET['id']) && is_numeric($_GET['id'])) {
        $idTarea = $_GET['id'];
        $usuario = $_SESSION['usuario'];
        $sql = "SELECT tarea.id, tarea.titulo, tarea.descripcion 
                FROM tarea 
                INNER JOIN usuarios_tarea ON tarea.id = usuarios_tarea.tarea 
                INNER JOIN usuarios ON usuarios_tarea.usuario = usuarios.id 
                WHERE tarea.id = ? AND usuarios.usuario = ?";

        try {
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $statement = $conn->prepare($sql);
            $statement->bindParam(1, $idTarea, PDO::PARAM_INT);
            $statement->bindParam(2, $usuario, PDO::PARAM_STR);
            $statement->execute();

            $result = $statement->fetchAll(PDO::FETCH_ASSOC);

            if (!empty($result)) {
                echo "<table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Título</th>
                                <th>Descripción</th>
                            </tr>
                        </thead>
                        <tbody>";

                foreach ($result as $row) {
                    echo "<tr>
                            <td>{$row['id']}</td>
                            <td>{$row['titulo']}</td>
                            <td>{$row['descripcion']}</td>
                          </tr>";
                }
                echo "</tbody></table>";
            } else {
                echo "<p>No tenemos registrada esa tarea.</p>";
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        $conn = null;
    }
}


descripcionTarea();
include '../Views/descripcion.view.html';
