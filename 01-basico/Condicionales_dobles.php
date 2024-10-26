<?php

/**
 * Estructura condicional doble(if - else)
 * 
 * 
 * if(Expresion){
 * Codigo a ejecutar si la expresion es verdadera
 * }else{
 * Codigo es falsa
 * }
 * 
 * if(Expresion):
 * si es verdadera
 * else:
 * si es falsa
 * endfi;
 */

if(1 > 7){
  echo "Condiciones evalua a verdadera";
}else{
  echo "Condiciones evalua a false";
}

echo"<br>";

if(9 == 12):
  echo "Condiciones evalua a verdadera";
else:
  echo "Condiciones evalua a false";
endif;

echo"<br>";

/**
 * calcular el total que alguien debe pagar en un monta llantas el presio de cada llanta 
 * es de 800  si se conpren menos de 5 y 700 si se compra mas de 5
 */

$llantas = 5;

if($llantas <= 5):
  $llantas = $llantas * (700); 
else:
  $llantas = $llantas * (800);
endif;

echo "Total a pagar es: ${llantas}";

echo"<br>";

/**
 * determinar si un alumno aprueba o desapureba un curso sabiendo que aprobara 
 * si su promedio de tres calificasiones es de 3.0
 */

$calificacion1 = 3.5;
$calificacion2 = 4.2;
$calificacion3 = 2.3;

$promedio = ($calificacion1 + $calificacion2 + $calificacion3) / 3;
$Nota_final = $promedio;

if($promedio >= 3.0):
  echo "Aprobado"; 
else:
  echo "Desaprobado"; 
endif;

echo"<hr><br>";

//(8 >= 10) ? echo "verdadero" : echo "es falso";

/**
 * Operador ternario
 *  operador ? true : false;
 */

$numero1 = 9;
$numero2 = 8;

echo $Resultado = ($numero1 > $numero2) ? $numero1 * $numero2 : $numero1 / $numero2;