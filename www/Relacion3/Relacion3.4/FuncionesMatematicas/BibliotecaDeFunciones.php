<?php

function esCapicua($n){
  if ($n > 9) {
    $reverso = strrev($n);
    if ($n == $reverso) {
      return true;
    } else {
      return false;
    }
  }
}
function esPrimo($n) {
  for ($i = 2; $i < $n; $i++) {
    if ($n % $i == 0) {
      return false;
    }
  }
  return true;
}

function siguientePrimo($n) {
  $siguiente_primo = $n + 1;
  while (!esPrimo($siguiente_primo)) { 
    $siguiente_primo++;
  }
  return $siguiente_primo;
}

function potencia($base, $exponente) {
  $result = 1;
  for ($i = 0; $i < $exponente; $i++) {
    $result *= $base;
  }
  return $result;
}

function digitos($n) {
  $digitos = 0;
  while ($n > 0) {
    $digitos++;
    $n = (int) ($n / 10);
  }
  return $digitos;
}

function voltea($n) {
  $volteado = 0;
  while ($n > 0) {
    $volteado = $volteado * 10 + $n % 10;
    $n = (int) ($n / 10);
  }
  return $volteado;
}

function digitoN($num, $n) {
  $num_str = (string)$num;
  if ($n >= 0 && $n < strlen($num_str)) { 
    $digito = $num_str[$n];
    return (int)$digito;
  } else {
    return -1; 
  }
}

function posicionDeDigito($n, $digito) {
  $num_str = (string)$n;
  $posicion = -1;
  for ($i = 0; $i < strlen($num_str); $i++) {
    if ($num_str[$i] == $digito) {
      $posicion = $i;
      break;
    }
  }
  return $posicion;
}

function quitarPorDetras($num, $n) {
  $num_str = (string)$num;
  $num_str = substr($num_str, 0, -$n);
  return (int)$num_str;
}

function quitarPorDelante($num, $n) {
  $num_str = (string)$num;
  $num_str = substr($num_str, $n);
  return (int)$num_str;
}

function pegarPorDetras($num, $n) {
  return (int)($num . $n); 
}

function pegarPorDelante($num, $n) {
  return (int)($n . $num);
}

function trozoDeNumero($n, $posicionInicial, $posicionFinal) {
  $num_str = (string)$n;
  $trozo = substr($num_str, $posicionInicial, $posicionFinal);
  return (int)$trozo;
}

function juntaNumeros($num1, $num2) {
  return (int)($num1 . $num2);
}
