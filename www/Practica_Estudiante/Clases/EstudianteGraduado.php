<?
class EstudianteGraduado extends Estudiante {

  private $nivel;

  public function __constructor($nombre, $edad, $curso, $notas) {
  
  }

  public function nivel($nivel){
    
  }

  public function getNivel(){
    return $this -> nivel;
  }
  public function setNivel($nivel){
    $this -> nivel = $nivel;
  }
}