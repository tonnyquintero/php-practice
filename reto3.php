<?php 

function Descontar($precioOriginal, $descuentoPorcentaje) {
  return $precioOriginal - ($precioOriginal * $descuentoPorcentaje / 100);
}

$precio = 674;
$descuento = 35;

echo "Precio original: $$precio \n";

echo "Descuento: $descuento% \n";

$precioConDescuento = Descontar($precio, $descuento);

echo "Precio con descuento: $$precioConDescuento \n";

echo "Ahorras: $" . ($precio - $precioConDescuento) . "\n";