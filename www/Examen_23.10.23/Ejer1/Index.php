<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio 1 Examen 23/10/23</title>
  <style>
    .contenedorpadre {
      position: relative;
      width: 500px;
      height: 200px;

    }

    .contenedorhijo {
      width: 400px;
      height: 2300px;
      position: absolute;
      top: 50%;
      left: 50%;
      margin: -25px 0 0 -25px;
      background-color: pink;
      text-align: center;
    }

    .FizzBuzz {
      color: red;
      font-weight: bold;
    }

    .Fizz {
      color: green;
      font-weight: bold;
    }

    .Buzz {
      color: blue;
      font-weight: bold;
    }
  </style>

</head>

<body>
  <div class="contenedorpadre">
    <div class="contenedorhijo">
      <h1>Ejercicio 1</h1>
      <p>FizzBuzz es un reto de programación que consiste en pintar los números del 1al 100 que cumplen las siguientes
        condiciones:</p>
      <p> ○ Si el número que toca pintar es múltiplo de 3, en su lugar pintaremos Fizz.</p>
      <p>○ Si es múltiplo de 5 pintaremos Buzz,</p>
      <p>○ Si es múltiplo 3 y 5 a la vez, pintaremos FizzBuzz</p>
      <hr>

      <?php
      for ($i = 1; $i <= 100; $i++) {
        if ($i % 3 == 0 && $i % 5 == 0) {
          echo "<span class='FizzBuzz'>FizzBuzz</span>" . "<br>";
        } elseif ($i % 5 == 0) {
          echo "<span class='Buzz'>Buzz</span>" . "<br>";
        } elseif ($i % 3 == 0) {
          echo "<span class='Fizz'>Fizz</span>" . "<br>";
        } else {
          echo $i . "<br>";
        }
      }
      ?>

    </div>
  </div>
</body>

</html>