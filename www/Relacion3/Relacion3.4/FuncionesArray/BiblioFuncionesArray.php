
<?php

function generaArrayInt($min, $max, $n)
{
  $arrayGenerado = [];
  for ($i = 0; $i < $n; $i++) {
    $arrayGenerado[] = rand($min, $max);
  }
  return $arrayGenerado;
}

function minimoArrayInt($array)
{
  $minimo = $array[0];
  for ($i = 0; $i < count($array); $i++) {
    if ($array[$i] < $minimo) {
      $minimo = $array[$i];
    }
  }
  return $minimo;
}

function maximoArrayInt($array)
{
  $maximo = $array[0];
  for ($i = 0; $i < count($array); $i++) {
    if ($array[$i] > $maximo) {
      $maximo = $array[$i];
    }
  }
  return $maximo;
}

function mediaArrayInt($array)
{
  $media = 0;
  for ($i = 0; $i < count($array); $i++) {
    $media += $array[$i];
  }
  return $media / count($array);
}

function estaEnArrayInt($array, $num)
{
  for ($i = 0; $i < count($array); $i++) {
    if ($array[$i] == $num) {
      return true;
    }
  }
  return false;
}

function posicionEnArray($array, $num)
{
  for ($i = 0; $i < count($array); $i++) {
    if ($array[$i] == $num) {
      return $i;
    }
  }
  return -1;
}

function volteaArrayInt($array)
{
  $arrayInvertido = [];
  for ($i = count($array) - 1; $i >= 0; $i--) {
    $arrayInvertido[] = $array[$i];
  }
  return $arrayInvertido;
}

function rotaDerechaArrayInt($array, $n)
{
  $arrayRotado = [];
  $count = count($array);

  if ($n >= $count) {
    $n = $n % $count;
  }

  for ($i = $count - $n; $i < $count; $i++) {
    $arrayRotado[] = $array[$i];
  }

  for ($i = 0; $i < $count - $n; $i++) {
    $arrayRotado[] = $array[$i];
  }

  return $arrayRotado;
}

function rotaIzquierdaArrayint($array, $n)
{
  $arrayRotado = [];
  $count = count($array);

  if ($n >= $count) {
    $n = $n % $count;
  }

  for ($i = $n; $i < $count; $i++) {
    $arrayRotado[] = $array[$i];
  }

  for ($i = 0; $i < $n; $i++) {
    $arrayRotado[] = $array[$i];
  }

  return $arrayRotado;
}
