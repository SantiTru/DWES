<!--Escribe un programa que genere 100 números aleatorios del 0 al 20 y que los muestre por
pantalla separados por espacios. El programa pedirá entonces por teclado dos valores y a
continuación cambiará todas las ocurrencias del primer valor por el segundo en la lista
generada anteriormente. -->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Relación 3.3 Ejer 4</title>
  <style>
    .contenedorpadre {
      position: relative;
      width: 1000px;
      height: 200px;
      text-align: center;
    }

    .contenedorhijo {
      width: 800px;
      height: 400px;
      position: absolute;
      top: 50%;
      left: 50%;
      margin: -25px 0 0 -25px;
      background-color: rgb(8, 182, 314);
      text-align: center;
    }

    .boton {
      text-align: center;
      width: 400px;
    }

    table {
      margin: 0 auto;
      /* Centra la tabla horizontalmente */
    }
  </style>
</head>
<?php $numeros = array();

for ($i = 0; $i <= 100; $i++) {
  $numeros[$i] = rand(1, 100);
}
?>
<body>
<div class="contenedorpadre">
    <div class="contenedorhijo">
      <br>
      <br>
      <h3>Vamos a mostrar 100 números aleatorios del 0 al 20: </h3>
      <br>
      <input type= "hidden" name= "numeros" value = <?= $numeros ?>>

      <h4>Además vamos a invertir la posición de los 2 números que tu elijas</h4>
      <br>

      <form action="Invertir.php" method="post">
        <input type="number" name="num1"><br>
        <br>
        <input type="number" name="num2"><br>
        <br>
        <input type="submit" value="Enviar">
      </form>

    </div>
  </div>
</body>

</html>