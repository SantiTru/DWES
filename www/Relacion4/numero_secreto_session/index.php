<?php
session_start();

  if (!isset($_REQUEST['numero'])) {


    if (!isset($_SESSION['aleatorio'])) {


      $_SESSION['aleatorio']= rand(1, 100);
      $_SESSION['intentos']=0;
      $_SESSION['guarda_intentos']= array();
    }
    echo "<form action='index.php' method='post'>
    <H3>Juego del número secreto</H3>
        Adivina mi número:
        <input type='text' name='numero'><br>
        <br>                
        <input type='submit' value='Probar Suerte'>
        </form>";
    echo "LLevas " . $_SESSION['intentos'] . " intentos";
    echo "<br>"."<br>";
    echo "Has probado los números: ";
    foreach ($_SESSION['guarda_intentos'] as $intento) {  
      echo $intento . ", ";
    }
  
  } else {
    $n = $_REQUEST['numero'];
    $aleatorio = $_SESSION['aleatorio'];
    $intentos = $_SESSION['intentos'];
    $_SESSION['intentos']++;
    $_SESSION['guarda_intentos'][]=$n;
    echo "Tu número es: $n<br>";
    if ($n > $aleatorio) {
      echo "Mi número es MENOR";
    } else if ($n < $aleatorio) {
      echo "Mi número es MAYOR";
    } else {
      echo "<p>ENHORABUENA, HAS ACERTADO</p>";
      echo "Has necesitado " . $_SESSION['intentos'] . " intentos";
      session_destroy();
    }

    echo "<br><a href='index.php'>Sigue jugando...</a>";
  }

?>