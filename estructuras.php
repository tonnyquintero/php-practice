<?php
$arreglo = [
    'color' => 'verde',
    'lugar' => 'playa',
    'año' => 2021
];

foreach($arreglo as $llave => $valor) {
    echo $llave . ' = ' . $valor . PHP_EOL;
}