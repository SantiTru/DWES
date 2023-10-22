<?php

echo "<h1>Calculadora de Facturas</h1>";

        $baseImponible = $_POST["base"];

        $impuesto = $_POST["impuesto"];

        $impuestoCalculado = $baseImponible * $impuesto/100;

        $totalFactura = $baseImponible + $impuestoCalculado;

        echo "
          Base Imponible: " . $baseImponible . " €" . "<br> <br>
          Impuesto " . "(" . $impuesto . "%): " . $impuestoCalculado . " €" . "<br> <br>
          Total de la Factura: " . $totalFactura . " €" ;
