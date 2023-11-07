<?php
session_start();
/**
 * En esta página se encuentra el código de la landing page del sitio. Se mostrará un enlace para iniciar sesión.
 * Modifica esta página y pon tu contenido.
 * 
 * Autor: @SantiTru
 * 
 */
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Página de inicio</title>
  <style>
    .contenedorpadre {
      position: relative;
      width: 400px;
      height: 200px;
      text-align: center;

    }

    .contenedorhijo {
      width: 400px;
      height: 300px;
      position: absolute;
      top: 50%;
      left: 50%;
      margin: -25px 0 0 -25px;
      background-color: rgb(130, 80, 180);
      text-align: center;
    }
  </style>
</head>

<body>
  <div class="contenedorpadre">

    <div class="contenedorhijo">
      <h1>Página de inicio</h1>
      

      <a href="login.php">Inicia sesión</a>
    </div>
  </div>

</body>

</html>