<?php
class UserController {
    private $userModel;
    private $userView;

    public function __construct($userModel, $userView) {
        $this->userModel = $userModel;
        $this->userView = $userView;
    }

    public function redirect($url) {
        header("Location: $url");
        exit();
    }

    public function procesarLogin() {
        $username = strtolower($_POST['usuario']);
        $password = $_POST['password'];
    
        $user = $this->userModel->getUserByUsername($username);
    
        if ($user && password_verify($password, $user['password'])) {
            $_SESSION['usuario_id'] = $user['id'];
            $_SESSION['usuario'] = $username;
            // Redirigir a index.php después de iniciar sesión
            $this->redirect('index.php');
            exit;
        } else {
            echo "Usuario o contraseña incorrectos";
        }
    }
    


}

