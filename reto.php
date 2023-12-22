<?php

function getChildrenAge($age) {
    if ($age <5) {
        echo "El niño tendra su juguete en la parte inferior de la bodega";
    } elseif ($age = 5 || 6 || 7) {
        echo "El niño tendra su juguete en la parte media de la bodega";
    } elseif ($age >8) {
        echo "El niño tendra su juguete en la parte alta de la bodega";
    } else {
        echo "El niño tendra su juguete en la bodega de al lado";
    }
    
}

getChildrenAge(100);