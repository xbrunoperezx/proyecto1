<?php
//creamos ahora la subclase Profesor
class Profesor extends Miembro {
    private $titular;
    private $asignatura;

// constructor
    public function __construct($id, $nombre, $apellidos, $email, $asignatura){
        parent::__construct($id, $nombre, $apellidos, $email);
        $this->asignatura=$asignatura;

    }

// creaamos el metodo estatico para los datos de los profesores

public static function crearProfesoresDeMuestra(){
    $profesores = [];
    $profesores []= new Profesor(1, "Steve", "Wozniak", "steve@apple.com", "DWES");
    $profesores []= new Profesor(2, "Ada", "Lovelace", "ada@gmail.com", "DIW");
    $profesores []= new Profesor(3, "Taylor", "Otwell", "taylor@laravel.com", "DWEC");
    $profesores []= new Profesor(4, "Rasmus", "Lerdoff", "rasmus@php.com", "DAW");



    return $profesores;

}
 
    
}



?>