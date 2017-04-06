<?php
$cod = $_POST['cedula'];

$conexion = new mysqli("localhost","root","","almacen");

  //Se verifica que no haya error de conexión
  if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
  }

    $resultado = mysqli_query($con,"SELECT * FROM clientes where ID = $cod");


?>
<html>
<head>
</head>
<body>
  <form action="#" method="post">
       <input type="text" name="cedula"></>
       <input type="text" name="nombre"></>
       <input type="text" name="apellidos"></>
       <input type="text" name="tipo"></>
       <input type="text" name="celular"></>
       <input type="text" name="puntos"></>
  <form>
</body>
</html>
