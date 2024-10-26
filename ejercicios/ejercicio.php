<?php

$a =25;
$b =5;
function calculadora($a,$b){
    try {
        if ($b === 0) {
            throw new Exception("Division por Cero.");
        }
        $respuesta = array(
            "suma"            =>$a+$b, 
            "resta"           =>$a-$b, 
            "multipli"        =>$a*$b, 
            "dividir"         => $a/$b
        );

        return $respuesta;
    } catch (Exception $e) {
        return $e->getMessage();
    }

}


$resultado = calculadora($a , $b);

echo "<pre>";
print_r($resultado);
echo "</pre>";





// cree la tabla de multiplicar del 1 al 10

// escribe una funcion que tome una cadena y devuelva una nueva cadena pero sin las bocales






// cree una funcion calcule si es corta o larga las palabras corta de 5 caracteres


//cree una funcion para caulcular cuantas silabas tiene una plabra