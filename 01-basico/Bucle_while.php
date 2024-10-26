<?php

// $tabla = 7;
// $a = 2;
// while($a <= 10) {
//   $a++;

//   if($tabla % $a == 0){
//     $a++;
//   }else{
//     break;
//   }
//   if($a == 8) continue;

//   echo "$tabla x $a = " . $tabla * $a . "<br>";
// }

function esPrimo($numero) {
  $a = 2;
  $primo = true;
  while($a < $numero/2 && $primo) {
    if($numero % $a == 0) {
      $primo = false;
    }
    $a++; 
  }
  return $primo;
}
$primo = esPrimo(12) ? "Si": "No";
echo $primo;



