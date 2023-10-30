<?
session_start();
session_destroy();
/**
 * En esta página se encuentra el código necesario para cerrar la sesión y eliminar la información que haya almacenada en la sesión.
 * 
 * Autor: @SantiTru
 * 
 */
$_SESSION= array();

header("Location: ./login.php");

?>