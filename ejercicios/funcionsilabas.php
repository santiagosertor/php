<?php

// $exp = "/texto/i";
// $exp ="/pr {eu} eba/i";
// $exp ="/grupo-[0-9]-adso/";
// $exp = "/le{2,4}r/";
// $exp = "/l[aiou]{2,4}r/";
// $exp = "/[0-9]/";
// $exp = "/[A-Za-z]/";
// $exp = "/ [A-Z]{4,}/";
$texto = "B22c0n0";
// $exp = "/(?=.\d)/";
$exp = "/^(?=.*[a-z])/";
// $exp = "/(?=.*[A-Z])/";
// $exp = "/(?=.*[A-Z]).[0-9]{2,}.(?=.*[a-z])/";

$resultado = preg_match_all($exp, $texto, $coincidencia,
PREG_OFFSET_CAPTURE);

echo"<pre>";
print_r($coincidencia);
echo"</pre>";


// if ($resultado) {
//     echo "si tiene resultado";
// } else {
//     echo "NO tiene resultado";
// }

// echo "<br>"
// echo $resultado;

