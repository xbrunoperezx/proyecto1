<?php

// creaamos una nueva clase Alumno que heredara los atributos de la clase padre
class Alumno extends Miembro {
    private $asignaturas;
    private $cursoAbonado;
    private $edad;

// creamos constructor cogiendo los atributos de la clase padre e implmentando los de Alumno
    public function __construct($id, $nombre, $apellidos, $email, $edad, $cursoAbonado) {
        parent::__construct($id, $nombre, $apellidos, $email, );
        //creo el array vacio de asignaturas
        $this->asignaturas = [];
        $this->cursoAbonado = $cursoAbonado;
        $this->edad = $edad;
    }

// creamos metodo de abonar curso que nos diga si a abonado o no el alumno
    public function abonarCurso(){
        $this->cursoAbonado=true;
        echo "El curso esta abonado. \n";
    }

// creamos otra funcion para el alumno  matricularse en asignatura (no se matricular dos veces en la misma asignatura)
    public function matricularseEnAsignatura(){

    }

    

    /**
     * Get the value of asignaturas
     */
    public function getAsignaturas()
    {
        return $this->asignaturas;
    }

    /**
     * Set the value of asignaturas
     */
    public function setAsignaturas($asignaturas): self
    {
        $this->asignaturas = $asignaturas;

        return $this;
    }

    /**
     * Get the value of cursoAbonado
     */
    public function getCursoAbonado()
    {
        return $this->cursoAbonado;
    }

    /**
     * Set the value of cursoAbonado
     */
    public function setCursoAbonado($cursoAbonado): self
    {
        $this->cursoAbonado = $cursoAbonado;

        return $this;
    }

    /**
     * Get the value of edad
     */
    public function getEdad()
    {
        return $this->edad;
    }

    /**
     * Set the value of edad
     */
    public function setEdad($edad): self
    {
        $this->edad = $edad;

        return $this;
    }
}

?>
