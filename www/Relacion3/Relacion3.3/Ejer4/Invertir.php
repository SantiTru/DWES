<?php
$num1 = $_POST['num1'];

$num2 = $_POST['num2'];

$numeros = array();

echo "Array generado aleatorio" . "<br>";
echo "<br>";

for ($i = 0; $i <= 100; $i++) {
  $numeros[$i] = rand(0, 20);
  echo " [ " . $numeros[$i] . " ] ";
}
echo "<br>";
echo "<br>";
echo "Array con los numeros pedidos cambiados" . "<br>";
echo "<br>";

for ($i = 0; $i <= 100; $i++) {
  if ($numeros[$i] == $num1) {
    $numeros[$i] = $num2;
  } elseif ($numeros[$i] == $num2) {
    $numeros[$i] = $num1;
  }
  echo " [ " . $numeros[$i] . " ] ";
}
