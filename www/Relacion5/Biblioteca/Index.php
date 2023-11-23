<!-- BIBLIOTECA VERSIÓN 1
     Características de esta versión:
       - Código monolítico (sin arquitectura MVC)
       - Sin seguridad
       - Sin sesiones ni control de acceso
       - Sin reutilización de código
-->
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
</head>

<body>

<h1>Selector de Acciones</h1>

<form action="index.php" method="get">
    <label for="action">Selecciona una acción:</label>
    <select name="action" id="action">
        <option value="mostrarListaLibros">Mostrar Lista de Libros</option>
        <option value="formularioInsertarLibros">Formulario Insertar Libros</option>
        <option value="insertarLibro">Insertar Libro</option>
        <option value="borrarLibro">Borrar Libro</option>
        <option value="formularioModificarLibro">Formulario Modificar Libro</option>
        <option value="modificarLibro">Modificar Libro</option>
        <option value="buscarLibros">Buscar Libros</option>
        <option value="formularioInsertarAutores">Formulario Insertar Autores</option>
        <option value="insertarAutor">Insertar Autor</option>
    </select>

    <br><br>

    <input type="submit" value="Ejecutar Acción">
</form>
    <?php

    // Miramos el valor de la variable "action", si existe. Si no, le asignamos una acción por defecto
    if (isset($_REQUEST["action"])) {
        $action = $_REQUEST["action"];
    } else {
        $action = "mostrarListaLibros";  // Acción por defecto
    }

    if ($action == "mostrarListaLibros") {
        mostrarListaLibros();
    }
    if ($action == "formularioInsertarLibros") {
        formularioInsertarLibros();
    }
    if ($action == "insertarLibro") {
        insertarLibro();
    }
    if ($action == "borrarLibro") {
        borrarLibro();
    }
    if ($action == "formularioModificarLibro") {
        formularioModificarLibro();
    }
    if ($action == "modificarLibro") {
        modificarLibro();
    }
    if ($action == "buscarLibros") {
        buscarLibros();
    }
    if ($action == "formularioInsertarAutores") {
        formularioInsertarAutores();
    }
    if ($action == "insertarAutor") {
        insertarAutor();
    }


    // --------------------------------- MOSTRAR LISTA DE LIBROS ----------------------------------------
    function mostrarListaLibros(){

        echo "<h1>Biblioteca</h1>";
        //Conecta con la BD y comprueba si hay libros. Si no hay muestra un mensaje indicando que no hay libros.
        $db = new mysqli("db", "root", "test", "biblioteca");
        $result = $db->query("SELECT * FROM libros");
        // Buscamos todos los libros de la biblioteca
        if ($result->num_rows != 0) {
            // Mostrar los libros
            echo "<table border='1'>
                <tr>
                    <th>Título</th>
                    <th>Género</th>
                    <th>País</th>
                    <th>Año</th>
                    <th>Número de Páginas</th>
                </tr>";

            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                    <td>{$row['titulo']}</td>
                    <td>{$row['genero']}</td>
                    <td>{$row['pais']}</td>
                    <td>{$row['año']}</td>
                    <td>{$row['numPaginas']}</td>
                </tr>";
            }

            echo "</table>";
        } else {
            // La consulta no contiene registros
            echo "No se encontraron datos";
        }
        echo "<p><a href='index.php?action=formularioInsertarLibros'>Nuevo</a></p>";
    }
/*
    // --------------------------------- FORMULARIO ALTA DE LIBROS ----------------------------------------

    function formularioInsertarLibros()
    {
        echo "<h1>Modificación de libros</h1>";

        // Crear el formulario con los campos del libro
        echo "<form action = 'index.php' method = 'get'>
                    Título:<input type='text' name='titulo'><br>
                    Género:<input type='text' name='genero'><br>
                    País:<input type='text' name='pais'><br>
                    Año:<input type='text' name='ano'><br>
                    Número de páginas:<input type='text' name='numPaginas'><br>";

        // Añadimos un select para seleccionar id del autor o autores
        $db = new mysqli("db", "root", "test", "biblioteca");
        $result = $db->query("");
        echo "<a href='index.php?action=formularioInsertarAutores'>Añadir nuevo</a><br>";

        // Finalizamos el formulario
        echo "  <input type='hidden' name='action' value='insertarLibro'>
					<input type='submit'>
				</form>";
        echo "<p><a href='index.php'>Volver</a></p>";
    }

    // --------------------------------- INSERTAR LIBROS ----------------------------------------

    function insertarLibro()
    {
        echo "<h1>Alta de libros</h1>";

        // Vamos a procesar el formulario de alta de libros
        // Primero, recuperamos todos los datos del formulario (titulo, género...)
       

        // Lanzamos el INSERT contra la BD.
        if ($db->affected_rows == 1) {
            // Si la inserción del libro ha funcionado, continuamos insertando en la tabla "escriben"
            // Tenemos que averiguar qué idLibro se ha asignado al libro que acabamos de insertar
           
            // Ya podemos insertar todos los autores junto con el libro en "escriben"
           
            echo "Libro insertado con éxito";
        } else {
            // Si la inserción del libro ha fallado, mostramos mensaje de error
            echo "Ha ocurrido un error al insertar el libro. Por favor, inténtelo más tarde.";
        }
        echo "<p><a href='index.php'>Volver</a></p>";
    }

    // --------------------------------- BORRAR LIBROS ----------------------------------------

    function borrarLibro()
    {
        echo "<h1>Borrar libros</h1>";

        // Recuperamos el id del libro y lanzamos el DELETE contra la BD
        
        // Mostramos mensaje con el resultado de la operación
        if ($db->affected_rows == 0) {
            echo "Ha ocurrido un error al borrar el libro. Por favor, inténtelo de nuevo";
        } else {
            echo "Libro borrado con éxito";
        }
        echo "<p><a href='index.php'>Volver</a></p>";
    }

    // --------------------------------- FORMULARIO MODIFICAR LIBROS ----------------------------------------

    function formularioModificarLibro()
    {
        echo "<h1>Modificación de libros</h1>";

        // Recuperamos el id del libro que vamos a modificar y sacamos el resto de sus datos de la BD
       
        // Creamos el formulario con los campos del libro
        // y lo rellenamos con los datos que hemos recuperado de la BD
        

        // Vamos a añadir un selector para el id del autor o autores.
        // Para que salgan preseleccionados los autores del libro que estamos modificando, vamos a buscar
        // también a esos autores.
        
        // Vamos a convertir esa lista de autores del libro en un array de ids de personas
        
        
        // Ya tenemos todos los datos para añadir el selector de autores al formulario
        
        
        // Por último, un enlace para crear un nuevo autor
        echo "<a href='index.php?action=formularioInsertarAutores'>Añadir nuevo</a><br>";

        // Finalizamos el formulario
        echo "  <input type='hidden' name='action' value='modificarLibro'>
                    <input type='submit'>
                  </form>";
        echo "<p><a href='index.php'>Volver</a></p>";
    }

    // --------------------------------- MODIFICAR LIBROS ----------------------------------------

    function modificarLibro()
    {
        echo "<h1>Modificación de libros</h1>";

        // Vamos a procesar el formulario de modificación de libros
        // Primero, recuperamos todos los datos del formulario (idLibro, titulo....)
        
        // Lanzamos el UPDATE contra la base de datos.
        
        
        if ($db->affected_rows == 1) {
            // Si la modificación del libro ha funcionado, continuamos actualizando la tabla "escriben".
            // Primero borraremos todos los registros del libro actual y luego los insertaremos de nuevo
          
            

            // Ya podemos insertar todos los autores junto con el libro en "escriben"
            
            echo "Libro actualizado con éxito";
        } else {
            // Si la modificación del libro ha fallado, mostramos mensaje de error
            echo "Ha ocurrido un error al modificar el libro. Por favor, inténtelo más tarde.";
        }
        echo "<p><a href='index.php'>Volver</a></p>";
    }

    // --------------------------------- BUSCAR LIBROS ----------------------------------------

    function buscarLibros()
    {
        // Recuperamos el texto de búsqueda de la variable de formulario
        
        echo "<h1>Resultados de la búsqueda: \"$textoBusqueda\"</h1>";

        // Buscamos los libros de la biblioteca que coincidan con el texto de búsqueda
        if(){
        // La consulta se ha ejecutado con éxito. Vamos a ver si contiene registros
            if ($result->num_rows != 0) {
                // La consulta ha devuelto registros: vamos a mostrarlos
                // Primero, el formulario de búsqueda
        
                // Después, la tabla con los datos
        
            } else {
                // La consulta no contiene registros
                echo "No se encontraron datos";
            }
        } else {
            // La consulta ha fallado
            echo "Error al tratar de recuperar los datos de la base de datos. Por favor, inténtelo más tarde";
        }
        echo "<p><a href='index.php?action=formularioInsertarLibros'>Nuevo</a></p>";
        echo "<p><a href='index.php'>Volver</a></p>";
    }
    // --------------------------------- FORMULARIO Insetar Autores ----------------------------------------

    function formularioInsertarAutores()
    {
        echo "<h1>Insertar autores</h1>";

        echo "<form action = 'index.php' method = 'get'>
                    Nombre:<input type='text' name='nombre'><br>
                    Apellido:<input type='text' name='apellido'><br>";

        // Finalizamos el formulario
        echo "  <input type='hidden' name='action' value='insertarAutor'>
					<input type='submit'>
				</form>";
        echo "<p><a href='index.php'>Volver</a></p>";
    }
    // --------------------------------- INSERTAR autores ----------------------------------------


    function insertarAutor()
    {
        echo "<h1>Alta de autores</h1>";

        // Vamos a procesar el formulario de alta de libros
        // Primero, recuperamos todos los datos del formulario (nombre, apellido)
        
        
        // Lanzamos el INSERT contra la BD.
        
        
        if ($db->affected_rows == 1) {

            echo "Autor insertado con éxito";
        } else {
            // Si la inserción del libro ha fallado, mostramos mensaje de error
            echo "Ha ocurrido un error al insertar el autor. Por favor, inténtelo más tarde.";
        }
        echo "<p><a href='index.php'>Volver</a></p>";
    }*/
    ?>

</body>

</html>