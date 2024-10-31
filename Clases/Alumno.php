<?php

// creaamos una nueva clase Alumno que heredara los atributos de la clase padre
class Alumno extends Miembro {
    private $asignaturas;
    private $cursoAbonado;
    private $edad;

// creamos constructor cogiendo los atributos de la clase padre e implmentando los de Alumno
//tambien quitamos el atributo $cursoAbonado del cosntructor
    public function __construct($id, $nombre, $apellidos, $email, $edad) {
        parent::__construct($id, $nombre, $apellidos, $email, );
        //creo el array vacio de asignaturas
        $this->asignaturas = [];
        //$this->cursoAbonado = $cursoAbonado; quito curso abonado por que no lo tengo q mostrar
        $this->edad = $edad;
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


    // creamos metodo de abonar curso que nos diga si a abonado o no el alumno
    public function abonarCurso(){
        $this->cursoAbonado=true;
        echo "El curso esta abonado. \n";
    }

// creamos otra funcion para el alumno  matricularse en asignatura (no se matricular dos veces en la misma asignatura)
    public function matricularseEnAsignatura($asignatura){
        if(in_array($asignatura, $this->asignaturas)){
            $this->asignaturas[]=$asignatura;
           

        }
    }
  
 // creamos la funcion de dar de baja en asignatura al alumno
    public function bajaEnAsignatura($asignatura){

    }

 // ahora creamos la funcion estatica para meter los datos de cada alumno   
    public static function crearAlumnosDeMuestra(){
        //declaro un array vacio, que luego creare los alumnos
        $alumnos = [];
        //ahora creo el array de los datos de cada alumno
        $alumnos [] = new Alumno (1, "Laura", "Martínez", "laura.martinez@email.com", 22);
        $alumnos [] = new Alumno (2, "Sergio", "López", "sergio.lopez@email.com", 25);
        $alumnos [] = new Alumno (3, "Carlos", "García", "carlos.garcia@email.com", 24);
        $alumnos [] = new Alumno (4, "Marta", "Sánchez", "marta.sanchez@email.com", 23);
        $alumnos [] = new Alumno (5, "Alba", "Fernández", "alba.fernandez@email.com", 21);
        $alumnos [] = new Alumno (6, "David", "Rodríguez", "david.rodriguez@email.com", 26);
        $alumnos [] = new Alumno (7, "Lucía", "Jiménez", "lucia.jimenez@email.com", 20);
        $alumnos [] = new Alumno (8, "Jorge", "Pérez", "jorge.perez@email.com", 22);
        $alumnos [] = new Alumno (9, "Elena", "Romero", "elena.romero@email.com", 23);
        $alumnos [] = new Alumno (10, "Pablo", "Torres", "pablo.torres@email.com", 24);
        return $alumnos;
    }


    
        
    
}

?>
