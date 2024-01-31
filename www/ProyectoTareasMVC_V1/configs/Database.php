<?php
class Database extends PDO {
  private $host = "db";
  private $user = "root";
  private $password = "test";
  private $database = "tareas";

  public function __construct() {
    $conn = 'mysql:host=' . $this->host . ';dbname=' . $this->database;
    parent::__construct($conn, $this->user, $this->password);
    $this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }
}
?>
