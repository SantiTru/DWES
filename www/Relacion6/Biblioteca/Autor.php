<?

class Autor{

  private $idAutor;
  private $nombre;
  private $apellido;

  public function __construct($idAutor, $nombre, $apellido){
    $this->idAutor = $idAutor;
    $this->nombre = $nombre;
    $this->apellido = $apellido;
  }
}