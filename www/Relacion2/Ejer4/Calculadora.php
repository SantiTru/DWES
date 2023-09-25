<!DOCTYPE html>
<html>
  <head>
    <title>Relacion 2 Ejer 4</title>
    <meta charset="UTF-8" />
  </head>
  <body>
      Hola, la suma de 
      
      <?=$_POST["numero1"]?> 

      más 

      <?=$_POST["numero2"]?> 

      es: 

      <?php echo $_POST["numero1"] + $_POST["numero2"]; ?>. 

      <br>
      <br>

      la resta de 
      
      <?=$_POST["numero1"]?> 

      menos 

      <?=$_POST["numero2"]?> 

      es: 

      <?php echo $_POST["numero1"] - $_POST["numero2"]; ?>. 

      <br>
      <br>

      la multiplicación de 
      
      <?=$_POST["numero1"]?> 

      por 

      <?=$_POST["numero2"]?> 

      es: 

      <?php echo $_POST["numero1"] * $_POST["numero2"]; ?>. 

      <br>
      <br>

      la división de 

      <?=$_POST["numero1"]?> 

      entre 

      <?=$_POST["numero2"]?> 

      es: 

      <?php echo $_POST["numero1"] / $_POST["numero2"]; ?>. 

      <br>
      <br>

      Que tengas un buenisimo día.
  
  </body>
 </html>