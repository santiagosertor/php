<?php

/**
 * 
 * Operadores de incremento y decremento
 * 
 * Simbolo            Nombre
 * ++                 Incremento
 * --                 Decremento
 * 
 * Ejemplo
 * 
 * ++$Variable        Pre-incremento
 * --$Variable        Pre-decremento
 */

$numero = 10;

//Primero incrementa y luego realiza la operacion
echo "Pre incremento".++$numero;

echo "<br>";

//Primero realiza la operacion y luego incrementa
echo "Post incremento".$numero++;

echo "<br>";
echo $numero;

echo "<br>";

//Primero resta y luego realiza la operacion
echo "Pre decremento".--$numero;

echo "<br>";

//Primero realiza la operacion y luego resta el valor
echo "Post decremento".$numero--;

echo "<br>";

//10 + 1 = 11
$resultado = ++$numero;

echo $resultado;

echo "<br>";

//Operador unario
$resultado = $numero++;
echo "Linea 51 ¿?".$resultado;