<?php
class Database {
  private $host = "db";
  private $user = "root";
  private $password = "test";
  private $database = "tareas";

  public function connect() {
    $conn = 'mysql:host=' . $this->host . ';dbname=' . $this->database;
    $pdo = new PDO($conn, $this->user, $this->password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $pdo;
  }
}
?>