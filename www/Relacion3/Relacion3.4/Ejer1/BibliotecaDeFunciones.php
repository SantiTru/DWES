<?php

function esCapicua($n){
  $reverso = strrev($n);
  if ($n == $reverso) {
    return true;
  } else {
    return false;
  }
}
function esPrimo($n){
  for ($i=2; $i < $n; $i++) {
    if ($n % $i == 0) {
      return false;
    }
  }
  if (($n == 0) || ($n == 1)){
    return false;
  }
  return true;
}
