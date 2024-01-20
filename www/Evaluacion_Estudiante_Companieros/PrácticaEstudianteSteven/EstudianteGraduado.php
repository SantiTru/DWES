<?php


class EstudianteGraduado {
    
    public $nombre;
    public $edad;
    public $curso;
    public $nivel;
    public $notasArr = array();
   

    
    public function __construct($nombre, $edad, $curso, $nivel, $notasArr){
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->curso = $curso;
        $this->notasArr = $notasArr;

    }

    
    public function agregarNota($nota){
        return array_push($this->notasArr, $nota);

    }

    public function obtenerMedia() {
        $contado = count($this->notasArr);
        $media = array_sum($this->notasArr) / $contado;
        return $media;

    }




    function __toString() {
        return "<br>Nombre: " . $this->nombre . "<br> Edad: " . $this->edad . "<br> Curso: " . $this->curso .  "<br> Nivel: " . $this->nivel . "<br> Media de notas: " . $this->obtenerMedia() . " - ";
    }
    

}


?>