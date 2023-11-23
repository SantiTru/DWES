<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gestclient</title>
  
</head>

<body>

  <div style="background-color: lightblue;">
    <div >
      <h1 align="center" >GESTCLIENT</h1>
      <h2>Gestión de clientes de CertiBank</h2>
      <?php


try{
      // Conexión a la base de datos

          $host = "db";
          $dbUsername = "root";
          $dbPassword = "test";
          $dbName = "banco";
          $conn = new PDO("mysql:host=$host;dbname=$dbName", $dbUsername, $dbPassword);
          $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (Exception $e)
         {
          // $errores .=  "Error: " . $e->getMessage();
      }
        

      //obtener la acción del botón que se ha pulsado en el formulario
      
      // Dar de baja un cliente
      if (isset($_GET['accion']) && $_GET['accion'] == 'borrar' && isset($_GET['dni']))

      {
            // hacer llamada a BD con la consulta oportuna
            $dni= $_GET['dni'];
            $statement = $conn->prepare('DELETE FROM cliente WHERE dni = :dni');
            $statement->execute(array(':dni' => $dni));
      }

      // Dar de alta un cliente Y buscar si esta registardo con un DNI 
      if (isset($_GET['accion']) && $_GET['accion'] == 'crear') {
      
        //hacer llamada a BD con la consulta oportuna
     
        $dni= $_GET['dni'];
        $telefono= $_GET['telefono'];
        $nombre= $_GET['nombre'];
        $direccion= $_GET['direccion'];

// Verificar si el cliente ya existe en la base de datos
$Verificar = $conn->prepare('SELECT COUNT(*) FROM cliente WHERE dni = :dni');
$Verificar->bindParam(':dni', $dni);
$Verificar->execute();
$clienteExistente = $Verificar->fetchColumn();

        if ($clienteExistente > 0) 
        {
            echo "<H3>El cliente ya está registrado.</H3>";
        } 
        
      else 
      {
          // El cliente no existe, proceder con la inserción
          $statement = $conn->prepare('INSERT INTO cliente(nombre, telefono, direccion, dni) VALUES (:nombre, :telefono, :direccion, :dni)');
          $statement->execute(array(
              ':nombre' => $nombre,
              ':dni' => $dni,
              ':telefono' => $telefono,
              ':direccion' => $direccion,
    ));

    echo "<H3>Cliente registrado exitosamente.</H3>";
}

      }

      // Modificar un cliente
      if (isset($_GET['accion']) && $_GET['accion'] == 'modificar' && isset($_GET['dni']))
       {
       //hacer llamada a BD con la consulta oportuna
            $dni= $_GET['dni'];
              $telefono= $_GET['telefono'];
              $nombre= $_GET['nombre'];
              $direccion= $_GET['direccion'];

                $statement = $conn->prepare('UPDATE cliente SET nombre = :nombre, telefono = :telefono, direccion = :direccion WHERE dni = :dni');
                $statement->execute(array(
                    ':nombre' => $nombre,
                    ':dni' => $dni,
                    'telefono' =>$telefono,
                    'direccion' =>$direccion,
           ));




      }

      // Listado
      //Este listado se muestra siempre
      //hacer llamada a BD con la consulta del listado de clientes

      $consulta;


      ?>

      <table >
        <tr>
          <th>DNI</th>
          <th>Nombre</th>
          <th>Dirección</th>
          <th>Teléfono</th>
          <th></th>
        </tr>

        <form action="index.php" method="GET">
          <tr>
            <td><input type="text" name="dni"></td>
            <td><input type="text" name="nombre"></td>
            <td><input type="text" name="direccion"></td>
            <td><input type="text" name="telefono"></td>
            <input type="hidden" name="accion" value="crear">
            <td><input type="submit" value="Añadir"></td>
          </tr>
        </form>

        <?php
        $statement = $conn->prepare('SELECT * FROM cliente');
        $statement->execute();
        $clientes = $statement->fetchAll(PDO::FETCH_ASSOC);
        
        foreach ($clientes as $registro) {//hay que modificar el array() y cambiarlo por el código adecuado
        echo "<tr>
            <td>".$registro['dni']." </td>
            <td>". $registro['nombre']." </td>
            <td>". $registro['direccion']." </td>
            <td>". $registro['telefono']." </td>
            <td>
              <a href=\"modificar.php?&dni=". $registro['dni'] ."&nombre=". $registro['nombre'] ."&direccion=". $registro['direccion'] . "&telefono=". $registro['telefono']." \">
                <button >Modificar</button>
              </a>
            </td>
            <td>
              <a href=\"index.php?accion=borrar&dni=". $registro['dni']."\">
                <button>
                  <img width='20px' src='./Img/papelera.png' >
                </button>
              </a>
            </td>
          </tr>";
        
        }
        ?>
      </table>
    </div>
  </div>



</body>

</html>