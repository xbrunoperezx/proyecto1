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
    echo "<li>" ." Nombre: ".$totete->getNombre(). " ".$totete->getApellidos(). " Email: ".$totete->getEmail()."</li>";
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

//filtrado DE ALUMNOS QUE TENGAN <=23 AÑOS

$filtro=array_filter($alumnos,function($alumno){
    return $alumno->getEdad() <=23;
});

//mostrar los alumnos menores de esa edad
echo "<h2> Alumnos <=23 </h2>";
foreach($filtro as $alumno){
    echo "<li>" ." Nombre: ".$alumno->getNombre(). " ".$alumno->getApellidos(). " Email: ".$alumno->getEmail()."</li>";
}


//matriculacion de  alumnos

$alumnos[0]->matricularEnAsignatura($asignaturas[0]);  
$alumnos[1]->matricularEnAsignatura($asignaturas[0]);  
$alumnos[1]->matricularEnAsignatura($asignaturas[1]);  
$alumnos[2]->matricularEnAsignatura($asignaturas[0]);  
$alumnos[2]->matricularEnAsignatura($asignaturas[2]);  
$alumnos[3]->matricularEnAsignatura($asignaturas[0]);  
$alumnos[4]->matricularEnAsignatura($asignaturas[0]);  
$alumnos[4]->matricularEnAsignatura($asignaturas[1]);  
$alumnos[4]->matricularEnAsignatura($asignaturas[2]);  
$alumnos[5]->matricularEnAsignatura($asignaturas[0]);  
$alumnos[6]->matricularEnAsignatura($asignaturas[1]);  
$alumnos[6]->matricularEnAsignatura($asignaturas[1]);  
$alumnos[7]->matricularEnAsignatura($asignaturas[2]);  
$alumnos[8]->matricularEnAsignatura($asignaturas[1]);  
$alumnos[9]->matricularEnAsignatura($asignaturas[0]);

// filtrado para alumnos con almenos dos asignaturas
// llamo a la funcion count para contar el numero de  alumnos de ese array con almenos dos asignaturas

$filtro2=array_filter($alumnos,function($alumno){
    return count( $alumno->getAsignaturas())>=2;

});


//imprimir los datos

echo "<h2> Alumnos con almenos dos asignaturas </h2>";
foreach($filtro2 as $alumno){
    echo "<li>" ." Nombre: ".$alumno->getNombre(). " ".$alumno->getApellidos(). " Email: ".$alumno->getEmail()."</li>";
}
?>