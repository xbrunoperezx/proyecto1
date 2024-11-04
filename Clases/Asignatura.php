<?php
include_once'Clases/Miembro.php';
// creando una  nueva clase  diferente  a las de antes esta no hereda nada
class Asignatura {
    private $id;
    private $nombre;
    private $creditos;


// creamos su constructor por parametros
    public function _construct($id, $nombre, $creditos){
        $this->id =$id;
        $this->nombre =$nombre;
        $this->creditos =$creditos;

    }

     /**
     * Get the value of id
     */
     public function getId() {
        return $this->id;
    }
    
    /**
     * Set the value of id
     */

    public function setId($id) {
        $this->id = $id;
    }

    /**
     * Set the value of nombre
     */

    public function getNombre() {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     */
    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    /**
     * Set the value of creditos
     */
    public function getCreditos() {
        return $this->creditos;
    }

    /**
     * Set the value of creditos
     */
    public function setCreditos($creditos) {
        $this->creditos = $creditos;
    }

// creando el metodo tostring
    public function __toString() {
        return "Asignatura {id: $this->id, nombre: $this->nombre, creditos: $this->creditos}";
    }

 // creando el metido ESTATICO  para guardar los datos de la asignaturas en su correspondiente Array
 
    public static function crearAsignaturasDeMuestra (){
        $asignaturas = [];
        $asignaturas [] = new Asignatura(1, "DWES", 7 );
        $asignaturas [] = new Asignatura(2, "DWEC", 6 );
        $asignaturas [] = new Asignatura(3, "DIW", 4 );
        $asignaturas [] = new Asignatura(4, "DAW", 4);
        return $asignaturas;
    }



}


?>