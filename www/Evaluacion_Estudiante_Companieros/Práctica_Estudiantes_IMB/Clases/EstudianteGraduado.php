<?php
require_once('Estudiante.php');
class EstudianteGraduado extends Estudiante{
    //Atributos
    private $nivel;

    //Constructor
    public function __construct($nombre, $edad, $curso, $nivel) {
        parent::__construct($nombre, $edad, $curso);
        $this->nivel = $nivel;
    }

    //Métodos
    public function __toString(){
        return "<h3>". $this->get_nombre() . "</h3><ul><li>Edad: " . $this->get_edad() . "</li>
        <li>Curso: " . $this->get_curso() . "</li><li>Nivel: " . $this->nivel . "</li>
        </li><li>Notas: " . $this->get_notas() . "</li><li>Media: " . $this->obtenerMedia() . "</li></ul>";
    }
    //setter
    public function set_nivel($nivel){
        $this->nivel = $nivel;
    }
    //getter
    public function get_nivel(){
        return $this->nivel;
    }
}
?>