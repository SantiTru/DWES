<?php
abstract class Poligono
{
  public $lado;
  public $apellidos;
  public $edad;


  public function __construct($lado, $apellidos, $edad)
  {
    $this->lado = $lado;
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