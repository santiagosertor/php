<?php
/**
 * Estructura
 * if(?){
 *  if(?){
 *      Codigo a ejecutar
 * }else{
 *      Codigo a ejecutar
 *  }
 * }
 */

$a = 20;
$b = 3;
$c = 100;

if ($a > $b){
  if($a > $c)
  {
    echo "$a es mayor que $b y $c";
  }
  else{
    echo "$a es mayor que $b pero es menor que $c";
  }
}