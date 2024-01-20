<?php
class Estudiante{
    //Atributos
    private $nombre;
    private $edad;
    private $curso;
    private $notas = array();

    //Contructor
    public function __construct($nombre, $edad, $curso){
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->curso = $curso;
    }

    //Getters
    public function get_nombre(){
        return $this->nombre;
    }
    public function get_edad(){
        return $this->edad;
    }
    public function get_curso(){
        return $this->curso;
    }
    public function get_notas(){
        $listaNotas = "";
        if(count($this->notas) > 0){
            foreach($this->notas as $nota){
                $listaNotas .= $nota . " | ";
            }
            return $listaNotas;
        } else {
            return $this-> nombre . " no tiene notas registradas";
        }
    }

    //Setters
    public function set_nombre($nombre){
        $this->nombre = $nombre;
    }
    public function set_edad($edad){
        $this->edad = $edad;
    }
    public function set_curso($curso){
        $this->curso = $curso;
    }

    //Métodos
    public function agregarNota($nota){
        $this->notas[] = $nota;
    }
    public function obtenerMedia(){
        $sumatorio = 0;
        $contador = 0;
        if(count($this->notas) > 0){
            foreach($this->notas as $nota){
                $sumatorio = $sumatorio + $nota;
                $contador++;
            }
            return number_format(($sumatorio/$contador), 2);
        } else {
            return $this-> nombre . " no tiene notas registradas";
        }
    }
    public function __toString(){
        return "<h3>". $this->nombre . "</h3><ul><li>Edad: " . $this->edad . "</li>
        <li>Curso: " . $this->curso . "</li><li>Notas: " . $this->get_notas() . "</li>
        <li>Media: " . $this->obtenerMedia() . "</li></ul>";
    }

}

?>