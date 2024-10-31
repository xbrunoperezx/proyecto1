<?php

function generateTriangle($altura): int{

    echo "<pre>";
    $altura=6;
    
    for( $i=0; $i<$altura; $i++){
        for( $j=$i; $j<$altura-1;$j++){
            echo "&nbsp";
        }
            for( $k=0; $k<$i+$i+1;$k++){
                echo "*";
            } 

            echo "<br>";
    }       


    echo "</pre>";
    
    return $altura;

}

function comprobarAltura($numero){
    while($numero < 0){
        echo "altura negativa";

    }
    return $numero;
}

generateTriangle($altura);
comprobarAltura($numero);

?>