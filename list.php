<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <link rel='shortcut icon' type='image/x-icon' href='favicon.ico' />

    <title>Listar</title>

    <link href="css/metro.css" rel="stylesheet">
    <link href="css/metro-icons.css" rel="stylesheet">
    <link href="css/metro-responsive.css" rel="stylesheet">

    <script src="js/jquery-2.1.3.min.js"></script>
    <script src="js/metro.js"></script>
  </head>
<?php

//Se abre una  conexion con el servidor
  $con = new mysqli("localhost","root","","almacen");

  //Se verifica que no haya error de conexión
  if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
  }

    $resultado = mysqli_query($con,"SELECT * FROM barrios");


    echo "<table class="table bordered" border ='1'>";
    echo "<tr>";
    echo "<th>CODIGO DEL BARRIO</th>";
    echo "<th>NOMBRE</th>";
    echo "</tr>";

    while ($row = mysqli_fetch_row($resultado))  {


       $cod   = $row[0];
       $nom =   $row[1];


       echo "<tr>";
       echo "<td>$row[0]</td>";
       echo "<td>$row[1]</td>";
       echo "</tr>";
    }
    echo "</table>";
