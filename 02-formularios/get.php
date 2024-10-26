<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
  <?php
    echo $_POST["numero"];
  ?>

  <form action="controlador.php" method="post">
    <div>
      <label for="nombre">Ingrese su nombre</label>
      <input type="text" name="nombre" id="nombre">
    </div>
    <div>
      <label for="apellido">Ingrese  apellido</label>
      <input type="text" name="apellido" id="apellido">
    </div>
    <div>
      <label for="edad">Ingrese su edad</label>
      <input type="text" name="edad" id="edad">
    </div>
    <div>
      <label for="telefono">Ingrese su telefono</label>
      <input type="text" name="telefono" id="telefono">
    </div>
    <div><label>Seleccione un lenguaje</label></div>
    <div>
      <label for="CSS">CSS</label>
      <input type="checkbox" id="CSS" name="checkbox[]" value="css">
    </div>
    <div>
      <label for="Html">Html</label>
      <input type="checkbox" id="Html" name="checkbox[]" value="Html">
    </div>
    <div>
      <label for="JavaScript">JavaScript</label>
      <input type="checkbox" id="JavaScript" name="checkbox[]" value="JavaScript">
    </div>
    <button type="submit">Enviar</button>
  </form>

</body>
</html>