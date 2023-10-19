<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Prueba de bibuloteca de funciones</title>
  <style>
    .contenedorpadre {
      position: relative;
      width: 500px;
      height: 200px;
    
    }

    .contenedorhijo {
      width: 800px;
      height: 1000px;
      position: absolute;
      top: 50%;
      left: 50%;
      margin: -25px 0 0 -25px;
      background-color: pink;
      text-align: center;
    }
    .contenedorhijo ul{
      text-align: left;
    }
  </style>

</head>

<body>
  <div class="contenedorpadre">
    <div class="contenedorhijo">
      <h1>¡Biblioteca de funciones!</h1>
      <form action="SiguientePrimo.php" method="post">
        <h4>Función siguientePrimo()</h4> 
        <h5>Dime un número primo para darte el siguiente primo</h5>
        <input type="number" name="numero">
        <input type="submit" value="Probar ejercicio">
      </form>
      <br>
      <form action="Index.php" method="post">
        <input type="submit" value="Volver al indice">
      </form>
      <br>
      <?php
      include 'BibliotecaDeFunciones.php';
      $numero = $_POST["numero"];
      echo "El siguiente número primo de: " . $numero . " es: ";
      echo siguientePrimo($numero);    
      ?>
    </div>
  </div>
</body>

</html>