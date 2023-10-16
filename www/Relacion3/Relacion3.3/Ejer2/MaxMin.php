<?php

$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$num3 = $_POST['num3'];
$num4 = $_POST['num4'];

$numeros = array($num1, $num2, $num3, $num4);

$maximo = max($numeros);
$minimo = min($numeros);

echo "De los números introducidos: $num1, $num2, $num3 y $num4";

echo "<br>";
echo "<br>";

foreach($numeros as $numero)
if($numero == $maximo){
echo $numero . " " . " --{ máximo" . "<br>";
}
elseif ($numero == $minimo){
echo $numero . " " . " --{ minimo" . "<br>";
}else{
echo $numero . "<br>";
}




?>


<?php

/*
echo "De los números introducidos: $num1, $num2, $num3 y $num4";

echo "<br>";
echo "<br>";

echo "El máximo es: $maximo";

echo "<br>";
echo "<br>";

echo "El mínimo es: $minimo";
*/
?>