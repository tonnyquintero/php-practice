<?php


function getChildrenAge($age) {
    if ($age > 0 && $age < 5) {

        //$bodega ='inferior';
        return "la parte inferior de la bodega.";

    } elseif ($age >= 5 && $age <= 7) {

       // $bodega = 'media';
       return "la parte media de la bodega.";

    } elseif ($age > 7) {

       // $bodega = 'alta';
       return "la parte alta de la bodega.";


    } else {
        $bodega = 'Indefinida';
    }   
    
}

$edadEstudiante = 6;
echo "El estudiante con $edadEstudiante años, tendrá sus juguetes en " . getChildrenAge($edadEstudiante);

function arbolito($pisos) {
    for ($i=0; $i < $pisos ; $i++) { 
        echo str_repeat('*', $i ) . "\n";
    }
}

arbolito(10);