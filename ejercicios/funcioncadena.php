<?php

// escribe una funcion que tome una cadena y devuelva una nueva cadena pero sin las bocales

function eliminarVocales($cadena) {
    $vocales = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U',"á","é","í","ó","ú","Á",
    "É", "Í", "Ó", "Ú"];
    $cadenaSinVocales = str_replace($vocales, '', $cadena);
    return $cadenaSinVocales;
}

$texto = "SÁntiago Álejandro Mútis Forero";
echo eliminarVocales($texto);

