<?php

/**
 * Estructura condicional simple
 * 
 * if(expresion){
 * Codigo a ejecutar
 * }
 * 
 * if(expresion):
 * Codigo a ejecutar
 * endif;
 */ 

$edad = 18;
$saludo = "Hola persona";

if($edad >= 18){
  echo "Hola persona";
}

echo "<br>";

?>

<div>
  <?php if($edad >= 18): ?>
    <h1>Saludo persona</h1>
  <?php endif; ?>
</div>

<div>
  <?php if($edad >= 18){
  echo "Saludo persona";
  }?>
</div>

<div>
  <?php if($edad >= 18): ?>
    <h1>
      <?=$saludo?>
    </h1>
  <?php endif; ?>
</div>






<?php
/**
 * codigo que diga que el numero es par
 */
$numero = 10;
if ($numero % 2 == 0) {
echo "Es par";
} 

echo "<br>";


/**
* en un almacen se hace un 20% de descuento a los clientes que superen 100 dolares
*/
$total = 120;

if ($total > 100) {
    $total = $total - ($total*0.20); 
}

echo "Total a pagar es ${total}";

