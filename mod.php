<?php
$cod = $_POST['codigo'];

//Se abre una  conexion con el servidor
  $con = new mysqli("localhost","root","","almacen");

  //Se verifica que no haya error de conexión
  if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
  }

    $resultado = mysqli_query($con,"SELECT * FROM barrios where ID = $cod");

 while ($row = mysqli_fetch_row($resultado))  {
       $codigo   = $row[0];
       $nombre = $row[1];

}
    

echo "   <H2> Formulario De Modificar Datos </H2>";
       echo "   <form accept-charset=".'UTF-8'." action=".'mod2.php'." method=".'post'.">";

       echo "      <label>Cedula del Cliente: </label>";
       echo "      <input type=".'text'." id=".'COD'." name=".'codigo'." size = 10 maxlength = 10  value=".$codigo."  /><p>";

       echo "      <label>Nombres : </label>";
       echo "      <input type=".'text'." id=".'NOM'." name=".'Nombre'." size = 30  maxlength = 30  value=".$nombre." /><p>";

       echo "      <input type=".'submit'." value=".'Eliminar'." />";
echo "</form>";

?>
