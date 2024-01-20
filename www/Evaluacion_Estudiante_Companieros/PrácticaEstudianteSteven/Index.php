<?php

require_once('Estudiante.php');
require_once('EstudianteGraduado.php');


echo "<h2>Estudiantes:</h2><br>"

$Lautaro = new Estudiante("Lautaro", 20, "Segundo de Bellas artes", [5, 6, 8, 8, 9]);
 $Lautaro->agregarNota(8);
 $Lautaro->agregarNota(5);

 $Lautaro->obtenerMedia();

echo $Lautaro->__toString();
echo "<br>";


echo "<hr>";

$Pablo = new Estudiante("Pablo", "20", "Primero de Biología", [4, 7, 6, 6, 5]);
 $Pablo->agregarNota(6);
$Pablo->agregarNota(10);

 $Pablo->obtenerMedia();

echo $Pablo->__toString();
echo "<br>";
echo "<hr>";




$Jose = new EstudianteGraduado("Jose", "28", "Graduado de Quimica", "Doctorado", [4, 4, 9, 6, 6]);
 $Jose->agregarNota(6);
 $Jose->obtenerMedia();

echo $Jose->__toString();

echo "<br>";
echo "<hr>";

$Antonio = new EstudianteGraduado("Antonio", "20", "Graduado de Turismo", "Posgrado", [4, 7, 6, 6, 7]);
 $Antonio->agregarNota(6);
 $Antonio->obtenerMedia();

echo $Antonio->__toString();



















?>