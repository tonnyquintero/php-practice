<?php

function getFate() {

    $fate = rand(0,6);

    switch ($fate) {
        case 1:
            echo"seras millonario";
            break;
        case 2:
            echo"seras rencoroso ";
            break;
        case 3:
            echo"seras famoso ";
            break;
        case 4:
            echo"mueres joven ";
            break;
        case 5:
            echo"no te casas ";
            break;
        default:
            echo "se ha generado un error ";
            break;
    }
    return $fate;
}

getFate();


