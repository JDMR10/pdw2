!DOCTYPE html>
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
<?php
$nom=$_POST['nombre'];
$cod=$_POST['codigo'];

$con = new mysqli("localhost","root","","almacen");

  //Se verifica que no haya error de conexión
  if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
  }
           $sentencia ="UPDATE barrios SET CODIGO_BARRIO='$cod', NOMBRE_BARRIO='$nom' WHERE CODIGO_BARRIO='$cod' OR NOMBRE_BARRIO='$nom'";
           $resultado = mysqli_query($con,$sentencia);
           echo "Se Modifico con exito";
?>
</body>
</html>