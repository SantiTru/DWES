<?php
session_start();
/**
 * En esta página se encuentra el código de que comprueba que el usuario conectado es "test" y su password es "test".
 * Si el usuario es test/test se mostrará la página de contenido.php. En caso contrario se mostrará la de registro.php. 
 * 
 * Al recuperar la password automáticamente se le aplicará un cifrado sha512.
 * 
 * Autor: Nombre Apellidos
 * 
 */

if (isset($_POST['user']) && isset($_POST['password'])) {
  $user = strtolower($_POST['user']);
  $password = $_POST['password'];

  if ($user == "test" && $password == "test") {
    $_SESSION['user'] = $user;
    header('Location: contenido.php');
  } else {
    header('Location: registro.php');
  }
}

require 'views/login.view.php';
