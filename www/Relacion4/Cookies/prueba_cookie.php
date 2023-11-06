<?php 
if(!isset($_COOKIE['usuario'])){
  setcookie("usuario", "Santi", time()+60*3);
}

