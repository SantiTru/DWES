<?php
require_once 'persona.php';

$lunna= new persona("Luna", "Baturrica", 23);

echo $lunna->saludar();

echo "Mi nombre es " . $lunna . " " . $lunna->apellidos . ", tengo " . $lunna->edad . " años. Y tengo un mensaje para ti: ";

include_once "persona.view.html";

$santi= new persona("Santi", "Tru", 100);

echo "Mi nombre es " . $santi . " " . $santi->apellidos . ", tengo " . $santi->edad . " años. En mi tiempo los perros eran para trabajar. Pero tenemos que mejorar como sociedad.";

?>