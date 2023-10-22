<!DOCTYPE html>
  <html lang = "en">
    <head>
      <meta charset = "utf-8" />
      <meta name = "viewport" content = "width = device-width, initial-scale = 1.0" />
      <title>Relación 2 Ejercicio 9</title>
    </head>
    <body>
    <h1>Calculadora de volumen con la formula: </h1>
    <h3>V = 1/3 * pi * radio elevado a 2 * altura</h3>
    <h4>Dime el radio y la altura del cono</h4>
      <form action = "VolumenCono.php" method = "post">
        <label for = "radio">Radio <input id = "radio" name = "radio" type = "text" /></label>
        <br /><br />
        <label for = "altura">Altura <input id = "altura" name = "altura" type = "text" /></label>
        <br /><br />

        <input type = "submit" value = "Calcular" />
      </form>
    </body>
  </html>