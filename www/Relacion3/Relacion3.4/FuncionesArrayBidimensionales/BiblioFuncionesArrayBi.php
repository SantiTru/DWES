<?php

function generaArrayBiInt($n, $m, $min, $max){
    $arrayBi = [];
    for($i = 0; $i < $n; $i++){
        for($j = 0; $j < $m; $j++){
            $arrayBi[$i][$j] = rand($min, $max);
        }
    }

    return $arrayBi;
}

function imprimeArrayBi($arrayBi){
    $n = count($arrayBi);
    $m = count($arrayBi[0]);

    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j < $m; $j++) {
            echo $arrayBi[$i][$j] . " ";
        }
        echo "<br><br>";
    }
}

function filaDeArrayBiInt($arrayBi, $i){
    $m = count($arrayBi[0]);

    for ($j = 0; $j < $m; $j++) {
        echo $arrayBi[$i][$j] . " ";
    }

}

function columnaDeArrayBiInt($arrayBi, $j){
    $n = count($arrayBi);

    for ($i = 0; $i < $n; $i++) {
        echo $arrayBi[$i][$j] . "<br><br>";
    }
}

