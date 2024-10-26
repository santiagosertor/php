<?php

// los alumnos de un curso se an dividido a y b deacuerdo con el sexo y el nombre
// el grupo a esta formado  por las mujeres anteriror ala M y los Hombres posteriror N
// Y EL GRUPO B del resto escribir un programa que pida al usuairo el nombre y su sexo 
// del grupo que corresponde.

$nombre = "Mutis";
$sexo = "M";


function grupo($nombre,$sexo){
    if ($sexo == "f" && strtoupper($nombre) < "M" ||
    $sexo === "M" && strtoupper($nombre) > "M") {
        return "grupo A";

    } else{
        return "grupo B";
    }
}

$grupo = grupo($nombre, $sexo);
echo $grupo;