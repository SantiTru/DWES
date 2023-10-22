<?php
        const PRECIO_HORA = 12;

        $horasTrabajadas = $_POST['horasTrabajadas'];

        $salarioSemanal = $horasTrabajadas * PRECIO_HORA;

        echo "<p>Por " . $horasTrabajadas . " horas trabajadas te corresponde un salario de : " . $salarioSemanal . " €</p>";
