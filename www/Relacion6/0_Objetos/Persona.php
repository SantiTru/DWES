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

  public function saludar()
  {
    echo "Hola, Buenos días! ";
  }

  public function __toString()
  {
    return $this->nombre . " ";
  }
}
