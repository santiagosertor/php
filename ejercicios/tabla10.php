<?php

// cree la tabla de multiplicar del 1 al 10

$multiplicando= 10;
$multiplicador;

for ($multiplicador=1; $multiplicador <=10 ; $multiplicador++) { 
	echo "$multiplicando" . " X " . $multiplicador . " = " . $multiplicando * $multiplicador;
	echo "<br>";
}