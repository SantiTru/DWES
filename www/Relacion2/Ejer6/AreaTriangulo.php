<!DOCTYPE html>
<html>
  <head>
    <title>Relacion 2 Ejer 6</title>
    <meta charset="UTF-8" />
  </head>
  <body>
      Hola, el área del triangulo con base 
      
      <?=$_POST["base"]?> 

      y altura 

      <?=$_POST["altura"]?> 

      es: 

      <?php 
      $resultado= $_POST["base"] * $_POST["altura"] * 0.5 ;
      echo ($resultado); 
      ?>. 

      Que tengas un buenisimo día.
  
  </body>
 </html>

 