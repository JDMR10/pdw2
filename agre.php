<?php

$cod = $_POST['codigo'];
$nombar = $_POST['nbarrio'];

// Conexion a la base de datos.
$con = new mysqli("localhost","root","","almacen");

  //Se verifica que no haya error de conexión
  if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
  }
              $resultado = mysqli_query($con,"SELECT * FROM barrios WHERE ID = '$cod'");

                while ($row = mysqli_fetch_row($resultado))  {
                  if($ced != $row[0]){
                     echo "Barrio no esta registrado en la bases de datos";
                       $sentencia = "INSERT INTO barrios VALUES ('$cod','$nombar')";
                          $resultado1 =mysqli_query($con,$sentencia);
                     echo $resultado1;
                   echo "</br>";
                echo "Barrio es registrado en la base de datos";

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <link rel='shortcut icon' type='image/x-icon' href='favicon.ico' />

    <title>Registro</title>

    <link href="css/metro.css" rel="stylesheet">
    <link href="css/metro-icons.css" rel="stylesheet">
    <link href="css/metro-responsive.css" rel="stylesheet">

    <script src="js/jquery-2.1.3.min.js"></script>
    <script src="js/metro.js"></script>
 
    <style>
        .login-form {
            width: 25rem;
            height: 18.75rem;
            position: fixed;
            top: 50%;
            margin-top: -9.375rem;
            left: 50%;
            margin-left: -12.5rem;
            background-color: #ffffff;
            opacity: 0;
            -webkit-transform: scale(.8);
            transform: scale(.8);
        }
    </style>

    <script>
        $(function(){
            var form = $(".login-form");

            form.css({
                opacity: 1,
                "-webkit-transform": "scale(1)",
                "transform": "scale(1)",
                "-webkit-transition": ".5s",
                "transition": ".5s"
            });
        });
    </script>
</head>
<body class="bg-darkTeal">
<div class="app-bar">
    <a class="app-bar-element" href="#">Home</a>

    <span class="app-bar-divider"></span>

    <ul class="app-bar-menu">
        <li><a href="">registar</a></li>
        <li><a href="">modificar</a></li>
        <li><a href="">eliminar</a></li>
        <li><a href="">listar</a></li>
    </ul>
</div>
    <div class="login-form padding20 block-shadow">
     <?php
              if($cod != $row[0]){
                     echo "Barrio no esta registrado en la bases de datos";
                       $sentencia = "INSERT INTO barrios VALUES ('$cod','$nombar')";
                          $resultado1 =mysqli_query($con,$sentencia);
                     echo $resultado1;
                   echo "</br>";
                echo "Barrio es registrado en la base de datos";
              else{
             echo "Barrio esta registrado";
}
             ?>
    </div>
</body>
</html>

