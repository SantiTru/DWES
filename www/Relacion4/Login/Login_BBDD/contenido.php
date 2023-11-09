<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <style>
        .image-container {
            text-align: center;
            margin-top: 3%;
        }

        .image-container h1 {
            font-size: 24px;
        }

        .image-container h5 {
            font-size: 18px;
        }

        .image-row {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .image-column {
            flex: 0 0 30%; /* Tamaño de la columna de imagen */
            padding: 10px;
        }

        .image {
            max-width: 100%;
            border: 1px solid #ccc;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <div class="image-container">
        <h1>Welcome, <?php echo $_SESSION['usuario']; ?>!</h1>
        <h5>Te dejo unas imágenes generadas por IA para tu disfrute:</h5>
        <div class="image-row">
            <div class="image-column">
                <img class="image" src="Img/bosque1.png" alt="Imagen 1">
            </div>
            <div class="image-column">
                <img class="image" src="Img/bosque2.png" alt="Imagen 2">
            </div>
            <div class="image-column">
                <img class="image" src="Img/bosque3.png" alt="Imagen 3">
            </div>
        </div>
        <div class="image-row">
            <div class="image-column">
                <img class="image" src="Img/bosque4.png" alt="Imagen 4">
            </div>
            <div class="image-column">
                <img class="image" src="Img/bosque5.png" alt="Imagen 5">
            </div>
            <div class="image-column">
                <img class="image" src="Img/bosque6.png" alt="Imagen 6">
            </div>
        </div>
        <h2><a href="logout.php">Cerrar sesión</a></h2>
    </div>
</body>
</html>
