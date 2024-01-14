<?php

class Persona
{
  public $nombre;
  public $apellidos;
  public $edad;


  public function __construct($nombre, $apellidos, $edad)
  {
    $this->nombre = $nombre;
    $this->apellidos = $apellidos;
    $this->edad = $edad;
  }

    // Getter
    public function getnombre() {
      return $this->nombre;
    }
  
    // Setter
    public function setnombre($nombre) {
      $this->nombre = $nombre;
    }

    public function nombreCompleto() {
      return "Hola, me llamo " . $this->nombre . " " . $this->apellidos;
    }

    public function MayorDeEdad() {
      return $this->edad >= 18;
    }
}