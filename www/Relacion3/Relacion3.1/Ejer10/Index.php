<!DOCTYPE html>
  <html lang = "en">
    <head>
      <meta charset = "utf-8" />
      <meta name = "viewport" content = "width = device-width, initial-scale = 1.0" />
      <title>Ejercicio 10</title>
    </head>
    <body>
      <form action = "Horoscopo.php" method = "post">
        <label for = "dia">Dia <input name = "dia" type = "number" min = "1" max = "31" required /></label>
        <br><br>
        <label for = "mes">Mes <input name = "mes" type = "text" required /></label>
        <br><br>

        <input type = "submit" value = "Consultar" />
      </form>
    </body>
  </html>