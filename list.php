<?php

//Se abre una  conexion con el servidor
  $con = new mysqli("localhost","root","","almacen");

  //Se verifica que no haya error de conexión
  if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
  }

    $resultado = mysqli_query($con,"SELECT * FROM barrios");


    echo "<table border ='1'>";
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
