<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio 3 Examen 23/10/23</title>
  <style>
    .contenedorpadre {
      position: relative;
      width: 500px;
      height: 200px;

    }

    .contenedorhijo {
      width: 400px;
      height: 450px;
      position: absolute;
      top: 50%;
      left: 50%;
      margin: -25px 0 0 -25px;
      background-color: pink;
      text-align: center;
    }
  </style>

</head>

<body>
  <div class="contenedorpadre">
    <div class="contenedorhijo">
      <h1>Ejercicio 3</h1>
      <p>Crea un formulario por pantalla en el que se inserte un número no mayor a 1.000
        y muestre los números que son primos entre 1 y el número introducido por pantalla.
        Si el número introducido es menor de 1 o mayor de 1.000 o no ha sido introducido muestre
        un error por pantalla y un enlace para volver al formulario.</p>

      <hr>

      <form action="primos.php" method="post">
        <h5>Te da los números primos desde el número que introduces hasta 1000</h5>
        <h6>No introduzcas un número mayor a 1000</h6>
        <input type="number" name="numero">
        <input type="submit" value="Probar ejercicio">
      </form>

    </div>
  </div>
</body>

</html>