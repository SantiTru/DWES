<?

abstract class Animal {

  public $dieta;
  public $genero;
  public $medio;


  public function comer(){
  echo $this-> dieta;
  }

  public function moverse(){
  echo $this-> medio;
  }
  public function reproducirse(){
  echo $this-> genero;
  }
}