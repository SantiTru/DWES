<?
echo "Esta es la página de contenido que se abre cuando el usuario inicia sesión correctamente <br>";
echo"<br>";
echo"<hr>";
echo "Bienvenido ".$_SESSION['user'];
echo"<hr>";

?>
<br>
<a href="cerrarsesion.php">Cerrar sesion </a>