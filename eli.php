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
    $sentencia="DELETE FROM barrios WHERE ID ='$cod'";  
    
    $resultado = mysqli_query($conexion,$sentencia);

    echo "Los datos han sido eliminados";
    echo "<a href='page.html'>home</a>";

?>
