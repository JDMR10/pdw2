<?php
$cod = $_POST['codigo'];

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
<?php
while ($row = mysqli_fetch_row($resultado))  {
?>
<form action="facfin.php" method="post">
        <input type="text" name="nombre" value="<?php $row['0'] ?>"></>
        <input type="text" name="apellido" value="<?php $row['1']?>"></>
        <input type="text" name="tipo" value="<?php $row['2'] ?>"></>
        <input type="text" name="celular" value="<?php $row['3'] ?>"></>
        <input type="text" name="puntos" value="<?php $row['4'] ?>"></>
        <?php } ?>
        <table>
          <tr>
            <th>TITULO</th>
          </tr>
          <tr>
            <td>CONTENIDO</td>
          </tr>
          <table>
  <form>
</body>
</html>
