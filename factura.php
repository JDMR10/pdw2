<?php
$cod = $_POST['codigo'];

$conexion = new mysqli("localhost","root","","almacen");

  //Se verifica que no haya error de conexión
  if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
  }

    $resultado = mysqli_query($conexion,"SELECT * FROM clientes WHERE ID = $cod");


?>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <link rel='shortcut icon' type='image/x-icon' href='favicon.ico' />

    <title>Factura</title>

    <link href="css/metro.css" rel="stylesheet">
    <link href="css/metro-icons.css" rel="stylesheet">
    <link href="css/metro-responsive.css" rel="stylesheet">

    <script src="js/jquery-2.1.3.min.js"></script>
    <script src="js/metro.js"></script>
</head>
<body>
<?php
while ($row = mysqli_fetch_row($resultado))  {
?>

<form action="facfin.php" method="post">
<center><input type="text" name="cedula" value="<?php $cod ?>"></center>
<hr>
         <label>NOMBRE:</label>
        <input type="text" name="nombre" value="<?php $row['0'] ?>"></>
        <label>APELLIDO:</label>
        <input type="text" name="apellido" value="<?php $row['1']?>"></>
        <label>TIPO:</label>
        <input type="text" name="tipo" value="<?php $row['2'] ?>"></>
        <label>CELULAR:</label>
        <input type="text" name="celular" value="<?php $row['3'] ?>"></>
        <label>PUNTOS:</label>
        <input type="text" name="puntos" value="<?php $row['4'] ?>"></>
        <?php } ?>
        <h1> Productos a facturar</h1>
        <table class="table bordered border">
          <tr>
            <th>Descripcion</th>
            <th>Unidad</th>
            <th>Precio de Venta</th>
            <th>Cantidad a Comprar</th>
          </tr>
          <tr>
          <td>
 <div class="input-control select">
       <select name="Selpro1">
        <option value="NuNuCa">Crema de chocolate y nueces NuNuCa</option>
        <option value="Ositos de goma Gumbar">Ositos de goma Gumbar</option>
        <option value="Chocolate Schoggi">Chocolate Schoggi</option>
        <option value="Col fermentada Rossle">Col fermentada Rossle</option>
        <option value="Salchicha Thoringer">Salchicha Thoringer</option>
        <option value="Arenque blanco del noroeste">Arenque blanco del noroeste</option>
        <option value="Queso gorgonzola Telino">Queso gorgonzola Telino</option>
        <option value="Queso Mascarpone Fabioli">Queso Mascarpone Fabioli</option>
        <option value="Queso de cabra">Queso de cabra</option>
        <option value="Cerveza Sasquatch">Cerveza Sasquatch</option>
        <option value="Cerveza negra Steeleye">Cerveza negra Steeleye</option>
        <option value="Escabeche de arenque">Escabeche de arenque</option>
        <option value="Salmon ahumado Gravad">Salmon ahumado Gravad</option>
        <option value="Vino Cote de Blaye">Vino Cote de Blaye</option>
        <option value="Licor verde Chartreuse">Licor verde Chartreuse</option>
        <option value="Carne de cangrejo de Boston">Carne de cangrejo de Boston</option>
        <option value="Crema de almejas estilo Nueva Inglaterra">Crema de almejas estilo Nueva Inglaterra</option>
        <option value="Tallarines de Singapur">Tallarines de Singapur</option>
        <option value="Cafe de Malasia">Cafe de Malasia</option>
        <option value="Azucar negra Malacca">Azucar negra Malacca</option>
        </select>
        </div>
        <br>
         <div class="input-control select">
       <select name="Selpro1">
        <option value="NuNuCa">Crema de chocolate y nueces NuNuCa</option>
        <option value="Ositos de goma Gumbar">Ositos de goma Gumbar</option>
        <option value="Chocolate Schoggi">Chocolate Schoggi</option>
        <option value="Col fermentada Rossle">Col fermentada Rossle</option>
        <option value="Salchicha Thoringer">Salchicha Thoringer</option>
        <option value="Arenque blanco del noroeste">Arenque blanco del noroeste</option>
        <option value="Queso gorgonzola Telino">Queso gorgonzola Telino</option>
        <option value="Queso Mascarpone Fabioli">Queso Mascarpone Fabioli</option>
        <option value="Queso de cabra">Queso de cabra</option>
        <option value="Cerveza Sasquatch">Cerveza Sasquatch</option>
        <option value="Cerveza negra Steeleye">Cerveza negra Steeleye</option>
        <option value="Escabeche de arenque">Escabeche de arenque</option>
        <option value="Salmon ahumado Gravad">Salmon ahumado Gravad</option>
        <option value="Vino Cote de Blaye">Vino Cote de Blaye</option>
        <option value="Licor verde Chartreuse">Licor verde Chartreuse</option>
        <option value="Carne de cangrejo de Boston">Carne de cangrejo de Boston</option>
        <option value="Crema de almejas estilo Nueva Inglaterra">Crema de almejas estilo Nueva Inglaterra</option>
        <option value="Tallarines de Singapur">Tallarines de Singapur</option>
        <option value="Cafe de Malasia">Cafe de Malasia</option>
        <option value="Azucar negra Malacca">Azucar negra Malacca</option>
        </select>
        </div>
        <br>
          <div class="input-control select">
       <select name="Selpro1">
        <option value="NuNuCa">Crema de chocolate y nueces NuNuCa</option>
        <option value="Ositos de goma Gumbar">Ositos de goma Gumbar</option>
        <option value="Chocolate Schoggi">Chocolate Schoggi</option>
        <option value="Col fermentada Rossle">Col fermentada Rossle</option>
        <option value="Salchicha Thoringer">Salchicha Thoringer</option>
        <option value="Arenque blanco del noroeste">Arenque blanco del noroeste</option>
        <option value="Queso gorgonzola Telino">Queso gorgonzola Telino</option>
        <option value="Queso Mascarpone Fabioli">Queso Mascarpone Fabioli</option>
        <option value="Queso de cabra">Queso de cabra</option>
        <option value="Cerveza Sasquatch">Cerveza Sasquatch</option>
        <option value="Cerveza negra Steeleye">Cerveza negra Steeleye</option>
        <option value="Escabeche de arenque">Escabeche de arenque</option>
        <option value="Salmon ahumado Gravad">Salmon ahumado Gravad</option>
        <option value="Vino Cote de Blaye">Vino Cote de Blaye</option>
        <option value="Licor verde Chartreuse">Licor verde Chartreuse</option>
        <option value="Carne de cangrejo de Boston">Carne de cangrejo de Boston</option>
        <option value="Crema de almejas estilo Nueva Inglaterra">Crema de almejas estilo Nueva Inglaterra</option>
        <option value="Tallarines de Singapur">Tallarines de Singapur</option>
        <option value="Cafe de Malasia">Cafe de Malasia</option>
        <option value="Azucar negra Malacca">Azucar negra Malacca</option>
        </select>
        </div>
          </td>
            <td>
     <div class="input-control select">
        <select name="Seluni1">
        <option value="LITRO">LITRO</option>
        <option value="KILO">KILO</option>
        <option value="SIXPACK">SIXPACK</option>
        <option value="METRO">METRO</option>
        <option value="UNIDAD">UNIDAD</option>
        </select>
        </div>
        <br>
        <div class="input-control select">
        <select name="Seluni2">
        <option value="LITRO">LITRO</option>
        <option value="KILO">KILO</option>
        <option value="SIXPACK">SIXPACK</option>
        <option value="METRO">METRO</option>
        <option value="UNIDAD">UNIDAD</option>
        </select>
        </div>
        <br>
         <div class="input-control select">
        <select name="Seluni3">
        <option value="LITRO">LITRO</option>
        <option value="KILO">KILO</option>
        <option value="SIXPACK">SIXPACK</option>
        <option value="METRO">METRO</option>
        <option value="UNIDAD">UNIDAD</option>
        </select>
        </div>
          </td>
    <td>
          <div class="input-control text">
          <input type="text" placeholder="precio" value="9999" name="precio1">
          </div>
          <br>
          <div class="input-control text">
          <input type="text" placeholder="precio" value="9999" name="precio2">
          </div>
          <br>
          <div class="input-control text">
          <input type="text" placeholder="precio" value="9999" name="precio3">
          </div>
    </td>
    <td>
          <div class="input-control text">
          <input type="text" placeholder="cantidad" name="cantidad1">
          </div>
          <br>
          <div class="input-control text">
          <input type="text" placeholder="cantidad" name="cantidad2">
          </div>
          <br>
          <div class="input-control text">
          <input type="text" placeholder="cantidad" name="cantidad3">
          </div>
      </td>
          </tr>
          <table>
          <center>
          <button type="submit" class="button bg-blue" >Enviar</button>
          <center>
  <form>
</body>
</html>
