<!DOCTYPE html>
<html>

<head>
  <title>Relacion 2 Ejer 2</title>
  <meta charset="UTF-8" />
</head>

<body>
  Hola, la cantidad que me has puesto de Euros
  (
  <strong><?= $_POST["Euros"] ?></strong>
  )
  a Dolares es:

  <strong><?php echo $_POST["Euros"] * 1.07; ?></strong>.

  Que tengas un buenisimo día.

</body>

</html>