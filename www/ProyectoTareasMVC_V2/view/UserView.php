<?php
class UserView {
    public function showLoginForm() {
        ?>
        <div id='contenedor'>
            <div id='log' style='display:  block;' background>
                <h2>Atarea2</h2>
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
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
            header("Location: login.php");
            exit(); 
        }
    
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