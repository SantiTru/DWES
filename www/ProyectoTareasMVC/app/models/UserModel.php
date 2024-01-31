<?php
class UserModel{
  private $db;

  public function __construct() {
    $this->db = new Database();
  }

    public function registrarUsuario($usuario, $password)
    {
      $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

      $sql = "INSERT INTO usuarios (usuario, password) VALUES (?, ?)";
      $sql_exc = $this->db->prepare($sql);

      return $sql_exc->execute([$usuario, $hashedPassword]);
  }

    public function iniciarSesion($usuario, $password)
    {
        $sql = "SELECT * FROM usuarios WHERE usuario = ?";
        $sql_exc = $this->db->prepare($sql);
        $sql_exc->execute([$usuario]);
        $usuarioData = $sql_exc->fetch();

        if ($usuarioData && password_verify($password, $usuarioData['password'])) {
            // Iniciar sesión aquí
            // Puedes almacenar información en la sesión si es necesario
            return true;
        } else {
            return false;
        }
    }

    public function cerrarSesion()
    {
        // Cerrar sesión aquí
        // Puedes destruir la sesión o realizar otras operaciones necesarias
    }

    // Otros métodos según sea necesario para gestionar usuarios
}
?>
