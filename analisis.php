<?php


$palabras = array("carro", "barco", "avion", "helicoptero", "tanque", "moto");

for ($i=0; $i < count($palabras); $i++) { 
    if($_REQUEST['palabra'.$i] == $palabras[$i]) {
        echo "La palabra ingresada es correcta"."<br>";
    } else {
        echo "La palabra ingresada es incorrecta, la palabra 
        correcta es: " . $palabras[$i]."<br>";
    }
}
