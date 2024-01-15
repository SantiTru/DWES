<?
class Estudiante {
  private $nombre;
  private $edad;
  private $curso;
  private $notas;

  public function __constructor($nombre, $edad, $curso, $notas) {
  }
  
  public function getNombre(){
    return $this -> nombre;
  }
  public function setNombre($nombre){
    $this -> nombre = $nombre;
  }                                                                                                                                                                  
  public function getEdad(){
    return $this -> edad;
  }
  public function setEdad($edad){
    $this -> edad = $edad;
  }
  public function getCurso(){
    return $this -> curso;
  }
  public function setCurso($curso){
    $this -> curso = $curso;
  }

  public function AgregarNota($notas){
    $this -> notas[] = $notas;
  }

  public function ObtenerMedia(){
    return array_sum($this ->notas) / count($this ->notas);
  }

  public function datosEstudiante() {
    return $this -> nombre . " " . $this -> edad . " " . $this -> curso;
  }
}
?>