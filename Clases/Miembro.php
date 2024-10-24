<?php
//creamos la clase abstracta "la clase padre que de eesta heredara nuevas subclases"
abstract class Miembro {
    protected $id;
    protected $nombre;
    protected $apellidos;
    protected $email;

//creo un constructor con los atributos de la clase
    public function __construct($id,$nombre, $apellidos, $email) {
        $this->id=$id;
        $this->nombre=$nombre;
        $this->apellidos=$apellidos;
        $this->email=$email;

    }

// insertamos todos los setters and getters de todos los atributos

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     */
    public function setId($id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of nombre
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     */
    public function setNombre($nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get the value of apellidos
     */
    public function getApellidos()
    {
        return $this->apellidos;
    }

    /**
     * Set the value of apellidos
     */
    public function setApellidos($apellidos): self
    {
        $this->apellidos = $apellidos;

        return $this;
    }

    /**
     * Get the value of email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     */
    public function setEmail($email): self
    {
        $this->email = $email;

        return $this;
    }

    //ahora creo que metodo toString
    public function __toString(){
        return "Miembro {id: $this->id, nombre: $this->nombre, apellidos: $this->apellidos, email: $this->email,}";
    }
    





}





?>