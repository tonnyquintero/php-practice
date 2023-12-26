<?php

$palabras = array("carro", "barco", "avion", "helicoptero", "tanque", "moto");

$form = "<form action='analisis.php'>";

for ($i=0; $i < count($palabras); $i++) { 
    $form .= "La palabra: " . str_shuffle($palabras[$i]) . " ".
    "<input type='text' name='palabra" . $i. "'>" . 
    "<br>";
}

$button = "<button type= 'submit'>Enviar</button>";
$form_cierre = "</form>";

echo $form.$button.$form_cierre;