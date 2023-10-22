<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width = device-width, initial-scale = 1.0" />
  <title>ejercicio 7</title>
</head>

<body>
  <h1>Calculadora de Facturas</h1>
  <form action="baseimponible.php" method="post">
    <label for="base">Base imponible para calcular la factura <input id="base" name="base" type="text" /> €</label>
    <br>
    <br>
    <label for="base">Impuesto a aplicar <input id="impuesto" name="impuesto" type="text" /> %</label>
    <br>
    <br>
    <input type="submit" value="Enviar" />

  </form>
</body>

</html>