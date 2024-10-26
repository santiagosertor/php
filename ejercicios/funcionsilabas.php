<?php
function contarSilabas($palabra) {
    $palabra = strtolower($palabra);
    $numSilabas = preg_match_all('/[aeiouáéíóúü]+/u', $palabra);
        
    return $numSilabas;
}

$palabra = "computadora";
echo "La palabra '$palabra' tiene " . contarSilabas($palabra) . " sílabas.";
?>
