<?php
        const PI = 3.14159265359;

        $radio = $_POST['radio'];
        $altura = $_POST['altura'];

        $volumen = (1 / 3) * PI * pow($radio, 2) * $altura; // la función "pow" es la que php utiliza para las potencias: pow("numero", "potencia");

        echo "El volumen del cono con radio: $radio y altura: $altura es = $volumen";
