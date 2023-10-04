<!DOCTYPE html>
<html>

<head>
  <title>Relacion 2 Ejer 3</title>
  <meta charset="UTF-8" />
</head>

<body>
  Hola, la cantidad que me has puesto de Dolares
  (
  <strong><?= $_POST["Dolares"] ?></strong>
  )
  a Euros es:

  <strong><?php echo $_POST["Dolares"] / 1.07; ?></strong>.

  Que tengas un buenisimo día.

</body>

</html>