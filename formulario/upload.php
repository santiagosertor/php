<?php 

$destino = "destino.png";
if (isset($_FILES["archivo"])) {
 $errores = array();
 $temporal = $_FILES["archivo"]["tmp_name"];
 $nombre_archivo = $_FILES["archivo"]["name"];
 $tamaño_archivo = $_FILES["archivo"]["size"];
 $type_archivo = $_FILES["archivo"]["type"];
 $error_archivo = $_FILES["archivo"]["error"];

 $bandera = explode('.', $nombre_archivo);
 $archivo_extencion = strtolower( end($bandera));
 $extenciones = array("jpg","png","jpeg");
  
  if(!in_array($archivo_extencion, $extenciones)){
     $errores[] = "Extenciones no permitida";
  }

  if ($tamaño_archivo > 2097152) {
     $errores[] = "El tamaño maximo permitido es de 2MB";
  }
  
  $new_name = uniqid('file_', true) . '.' . $extenciones;  
  if (empty($errores)) {
    move_uploaded_file($temporal, "imagenes/".$nombre_archivo);
    echo "Archivo subido exitosamente con el nuevo nombre: " . $new_name;
  }

   
} else {
    echo "no Envio archivo";
}

