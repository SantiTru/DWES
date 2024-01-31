<?php
class UserView {
    public function showLoginForm() {
        ?>
        <div id='contenedor'>
            <div id='log' style='display:block;' background>
                <h2>Iniciar sesión</h2>
                <form action='login.php' method='post'>
                    Usuario: <input type='text' name='usuario'><br>
                    Contraseña: <input type='password' name='password'><br>
                    <input type='submit' value='Iniciar sesión'>
                </form>
                <br>
                <p>¿Nuevo usuario? <a href='registro.php'>Registrar</a></p>
            </div>
        </div>
        <?php
    }

    public function showRegistrationForm() {
        // Verificar si se ha enviado el formulario
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Procesar la información del formulario (validar y almacenar en la base de datos, por ejemplo)
    
            // Después de procesar, redirigir a la página de inicio de sesión
            header("Location: login.php");
            exit(); // Asegurarse de que no haya más salida después de la redirección
        }
    
        // Si no se ha enviado el formulario, mostrar el formulario de registro
        ?>
        <div id='registro' style='display: block;'>
            <h2>Registro de Usuario</h2>
            <form action='registro.php' method='post'>
                Usuario: <input type='text' name='usuario'><br>
                Contraseña: <input type='password' name='password'><br>
                Repite contraseña: <input type='password' name='password2'><br>
                <input type='submit' value='Registrar'>
            </form>
        </div>
        <?php
    }
}
?>