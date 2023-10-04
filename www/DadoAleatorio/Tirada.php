<!DOCTYPE html>
<html>
  <head>
    <title>Relacion 3 Ejer 4</title>
    <meta charset="UTF-8" />
  </head>
  <body>
      Hola, 
      <br>
      <br>  
      <strong><?=$_GET["jugador1"]?></strong>
      <br>
      <br> 
      <?php 
      $numero= rand(1,6);
      $numero2= rand(1,6);
      echo "<img src='./img/$numero.svg'/>";
      echo "<img src='./img/$numero2.svg'/>";
      echo "<br>";  
      echo "<br>"; 
      echo "Te ha salido un total de: " . ($numero + $numero2);
      ?>. 
      <br>
      <br>  
      <strong><?=$_GET["jugador2"]?></strong>
      <br>
      <br> 
      <?php 
      $numero3= rand(1,6);
      $numero4= rand(1,6);
      echo "<img src='./img/$numero3.svg'/>";
      echo "<img src='./img/$numero4.svg'/>";
      echo "<br>";  
      echo "<br>"; 
      echo "Te ha salido un total de: " . ($numero3 + $numero4);

      $total1= $numero + $numero2;
      $total2= $numero3 + $numero4;
      $jugador1= $_GET["jugador1"];
      $jugador2= $_GET["jugador2"];
      if($total1>$total2){
        echo "<br>";
        echo "<br>";
        echo "Gana $jugador1";
      }if($total2>$total1){
        echo "<br>";
        echo "<br>";
        echo "Gana $jugador2";
      }elseif($total1==$total2){
        echo "<br>";
        echo "<br>";
        echo "Empate";
      }
      ?>. 
      
  </body>
 </html>