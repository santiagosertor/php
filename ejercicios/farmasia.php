<?php

// en unsa farmasia aplica al precio de los remedios 10% desceuento hacer el programa el costo
// de los medicamentos y el presio fianl del 


$presio = 6000;
$descuento = 0.1;

$valordescuento = ($presio * $descuento);
$valorfinal = ($presio - $descuento);

echo $valordescuento;
echo "<br>";
echo $valorfinal;