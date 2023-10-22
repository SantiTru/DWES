<?php
        const GRAVEDAD = 9.81;

        $altura = $_POST["h"];

        $t = sqrt((2*$altura) / GRAVEDAD);

        echo "El tiempo que tardará en caer el objeto desde una altura de $altura metros es: $t segundos";
      ?>
