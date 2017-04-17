<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <link rel='shortcut icon' type='image/x-icon' href='favicon.ico' />

    <title>Eliminar</title>

    <link href="css/metro.css" rel="stylesheet">
    <link href="css/metro-icons.css" rel="stylesheet">
    <link href="css/metro-responsive.css" rel="stylesheet">

    <script src="js/jquery-2.1.3.min.js"></script>
    <script src="js/metro.js"></script>
  </head>
  <body>
<div class="app-bar">
    <a class="app-bar-element" href="#">Home</a>

    <span class="app-bar-divider"></span>

    <ul class="app-bar-menu">
        <li><a href="page.html">registar</a></li>
        <li><a href="modificar.html">modificar</a></li>
        <li><a href="eliminar.html">eliminar</a></li>
        <li><a href="listar.html">listar</a></li>
    </ul>
</div>

<?php
   $cod = $_POST['codigo'];

 //Se abre una  conexion con el servidor
  $conexion = new mysqli("localhost","root","","almacen");

  //Se verifica que no haya error de conexión
  if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
  }
// Sentencia SQL
    $sentencia="DELETE FROM barrios WHERE CODIGO_BARRIO ='$cod'";

    $resultado = mysqli_query($conexion,$sentencia);

    echo "Los datos han sido eliminados si el usuario existe";
    echo "<a href='page.html'>home</a>";

?>
</body>
</html>