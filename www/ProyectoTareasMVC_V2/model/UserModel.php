<?php
class UserModel {
    private $conexion;

    public function __construct($conexion) {
        $this->conexion = $conexion;
    }

    public function getUserByUsernameAndPassword($usuario, $password) {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND password = '$hashedPassword'";
        $result = $this->conexion->query($sql);

        return $result->fetch(PDO::FETCH_ASSOC);
    }

    public function insertUser($usuario, $password) {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO usuarios (usuario, password) VALUES ('$usuario', '$hashedPassword')";
        $result = $this->conexion->query($sql);

        return $result;
    }

    public function getUserByUsername($usuario) {
        $sql = "SELECT * FROM usuarios WHERE usuario = :username";
        $stmt = $this->conexion->prepare($sql);
        $stmt->bindParam(':username', $usuario, PDO::PARAM_STR);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}

