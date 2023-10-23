<!--Crea una biblioteca de funciones matemáticas que contenga las siguientes funciones.
Recuerda que puedes usar unas dentro de otras si es necesario.
1. esCapicua: Devuelve verdadero si el número que se pasa como parámetro es
capicúa y falso en caso contrario.
2. esPrimo: Devuelve verdadero si el número que se pasa como parámetro es primo
y falso en caso contrario.
3. siguientePrimo: Devuelve el menor primo que es mayor al número que se pasa
como
parámetro.
4. potencia: Dada una base y un exponente devuelve la potencia.
5. digitos: Cuenta el número de dígitos de un número entero.
6. voltea: Le da la vuelta a un número.
7. digitoN: Devuelve el dígito que está en la posición n de un número entero. Se
empieza
contando por el 0 y de izquierda a derecha.
8. posicionDeDigito: Da la posición de la primera ocurrencia de un dígito dentro de
un número entero. Si no se encuentra, devuelve -1.
9. quitaPorDetras: Le quita a un número n dígitos por detrás (por la derecha).
10. quitaPorDelante: Le quita a un número n dígitos por delante (por la izquierda).
11. pegaPorDetras: Añade un dígito a un número por detrás.
12. pegaPorDelante: Añade un dígito a un número por delante.
13. trozoDeNumero: Toma como parámetros las posiciones inicial y final dentro de
un número y devuelve el trozo correspondiente.
14. juntaNumeros: Pega dos números para formar uno -->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Prueba de biblioteca de funciones</title>
  <style>
    .contenedorpadre {
      position: relative;
      width: 500px;
      height: 200px;
    
    }

    .contenedorhijo {
      width: 800px;
      height: 2000px;
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
      <h3>Vamos a probar una bibuloteca de funciones que contiene las siguientes funciones</h3>

      <ul> 1. esCapicua: Devuelve verdadero si el número que se pasa como parámetro es
        capicúa y falso en caso contrario.</ul>
      <ul> 2. esPrimo: Devuelve verdadero si el número que se pasa como parámetro es primo
        y falso en caso contrario.</ul>
      <ul> 3. siguientePrimo: Devuelve el menor primo que es mayor al número que se pasa
        comoparámetro.</ul>
      <ul> 4. potencia: Dada una base y un exponente devuelve la potencia.</ul>
      <ul> 5. digitos: Cuenta el número de dígitos de un número entero.</ul>
      <ul> 6. voltea: Le da la vuelta a un número.</ul>
      <ul> 7. digitoN: Devuelve el dígito que está en la posición n de un número entero. Se
        empieza contando por el 0 y de izquierda a derecha.</ul>
      <ul> 8. posicionDeDigito: Da la posición de la primera ocurrencia de un dígito dentro de
        un número entero. Si no se encuentra, devuelve -1.</ul>
      <ul> 9. quitaPorDetras: Le quita a un número n dígitos por detrás (por la derecha).</ul>
      <ul> 10. quitaPorDelante: Le quita a un número n dígitos por delante (por la izquierda).</ul>
      <ul> 11. pegaPorDetras: Añade un dígito a un número por detrás.</ul>
      <ul> 12. pegaPorDelante: Añade un dígito a un número por delante.</ul>
      <ul> 13. trozoDeNumero: Toma como parámetros las posiciones inicial y final dentro de
        un número y devuelve el trozo correspondiente.</ul>
      <ul> 14. juntaNumeros: Pega dos números para formar uno</ul>
      <br>
      <hr>
      <h3>Dime que ejercicio quieres probar:</h3>
      <hr>
      <form action="..\Ejer2\Ejer2.php" method="post">
        <h4>Ejercicio 2</h4>
        <h5>Muestra los números primos que hay entre 1 y 1000</h5>
        <input type="submit" value="Probar ejercicio">
      </form>
      <form action="..\Ejer3\Ejer3.php" method="post">
        <h4>Ejercicio 3</h4> 
        <h5>Muestra los números capicúa que hay entre 1 y 99999</h5>
        <input type="submit" value="Probar ejercicio">
      </form>
      <form action="../Ejer4/Index.php" method="post">
        <h4>Ejercicio 4</h4>
        <input type="submit" value="Probar ejercicio">
      </form>
      <form action="../Ejer5/Index.php" method="post">
        <h4>Ejercicio 5</h4>
        <input type="submit" value="Probar ejercicio">
      </form>
      <form action="SiguientePrimo.php" method="post">
        <h4>Función siguientePrimo()</h4> 
        <h5>Te da el siguiente número primo al introducido</h5>
        <input type="submit" value="Probar ejercicio">
      </form>

    </div>
  </div>
</body>

</html>