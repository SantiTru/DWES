<?php
        $a = $_POST["a"];
        $b = $_POST["b"];

        if ($a == 0) {
          echo "La ecuación no tiene solución";
        } else {
          echo "La solución es: " . $a . "x + " . $b . " = 0<br />";
          echo "x = -(" . $b . ") / " . $a . "<br />";
          echo "x = " . (-$b / $a);
        }