<?php

//  incluyo las clases
include_once 'Clases/Miembro.php';
include_once 'Clases/Profesor.php';
include_once 'Clases/Alumno.php';
include_once 'Clases/Asignatura.php';
$asignaturas = ["A","B","C","D"];

//llamada  a la funcion de de crear ALUMNOS,PROFESORES,ASIGNATURAS de la array
$alumnos=  Alumno::crearAlumnosDeMuestra($asignaturas);
$profesores= Profesor:: crearProfesoresDeMuestra($asignaturas);
$asignaturas= Asignatura:: crearAsignaturasDeMuestra();

//listar alumnos
echo "<h2> Alumnos </h2> ";

foreach($alumnos as $totete){
    echo "Nombre: ".$totete->getNombre()."Email:".$totete->getEmail();
}

//listar profesores
echo "<h2> Profesores </h2>";

foreach($profesores as $totete1){
    echo "Nombre: ".$totete1->getNombre()."Email:".$totete1->getEmail();
}

//listar asignaturas
echo "<h2> Asignaturas </h2>";

foreach($asignaturas as $totete2){
    echo "Nombre: ".$totete2->getNombre()."creditos: ".$totete2->getCreditos();
}

echo "<h1>Listado de Asignaturas</h1>";
echo "<ul>";
foreach ($asignaturas as $asignatura) {
    echo "<li>";
    echo "ID: " . $asignatura->getId() . " - ";
    echo "Nombre: " . $asignatura->getNombre() . " - ";
    echo "Créditos: " . $asignatura->getCreditos();
    echo "</li>";

}
?>