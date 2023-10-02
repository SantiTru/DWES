<!DOCTYPE html>
<html>
  <head>
    <title>Relacion 3 Ejer 2</title>
    <meta charset="UTF-8" />
  </head>
  <body>
      Hola, 
      
      <?php 
      $hora= $_GET["hora"];
        if ($hora>=6 && $hora<=12) {
          echo "buenos dias";
        }elseif ($hora>=13 && $hora<=20) {
          echo "buenas tardes";
        }elseif ($hora>=21 && $hora<=24) {
          echo "buenas noches";
        }elseif ($hora>=1 && $hora<=5) {
          echo "buenas noches";
        }
      ?>. 
  
  </body>
 </html>