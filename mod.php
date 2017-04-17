<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <link rel='shortcut icon' type='image/x-icon' href='favicon.ico' />

    <title>Modificar</title>

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
  $con = new mysqli("localhost","root","","almacen");

  //Se verifica que no haya error de conexión
  if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
  }

          $resultado = mysqli_query($con,"SELECT * FROM barrios WHERE CODIGO_BARRIO = '$cod'");

 while ($row = mysqli_fetch_row($resultado))  {
       $codigo   = $row[0];
       $nombre = $row[1];

}

if($codigo ==""){
  echo "Usuario No Existe";
}else{
echo "   <H2> Formulario De Modificar Datos </H2>";
       echo "   <form accept-charset=".'UTF-8'." action=".'mod2.php'." method=".'post'.">";

       echo "      <label>Cedula del Cliente: </label>";
       echo "      <input type=".'text'." id=".'COD'." name=".'codigo'." size = 10 maxlength = 4  value=".$codigo."  /><p>";

       echo "      <label>Nombres : </label>";
       echo "      <input type=".'text'." id=".'NOM'." name=".'nombre'." size = 30  maxlength = 30  value=".$nombre." /><p>";

       echo "      <input type=".'submit'." value=".'Modificar'." />";
echo "</form>";
}
?>
</body>
</html>