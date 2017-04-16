<?php
$cod=$_POST['cedula'];
$nom=$_POST['nombre'];
$ape=$_POST['apellido'];
$tip=$_POST['tipo'];
$cel=$_POST['celular'];
$pun=$_POST['puntos'];

$selpro1 =$_POST['Selpro1'];
$selpro2 =$_POST['Selpro2'];
$selpro3=$_POST['Selpro3'];
$tipuni1=$_POST['Seluni1'];
$tipuni2=$_POST['Seluni2'];
$tipuni3=$_POST['Seluni3'];
$pre1=$_POST['precio1'];
$pre2=$_POST['precio2'];
$pre3=$_POST['precio3'];

$can1=$_POST['cantidad1'];
$can2=$_POST['cantidad2'];
$can3=$_POST['cantidad3'];
$valor1=$can1*$pre1;
$iva1=$valor1*0.14;
$total1=$valor1+$iva1;
$valor2=$can2*$pre2;
$iva2=$valor2*0.14;
$total2=$valor2+$iva2;
$valor3=$can3*$pre3;
$iva3=$valor3*0.14;
$total3=$valor3+$iva3;


$conexion = new mysqli("localhost","root","","almacen");

  //Se verifica que no haya error de conexión
  if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
  }

    $resultado = mysqli_query($conexion,"SELECT * FROM clientes where ID = $cod");


?>
<!DOCTYPE html>
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

    <style>
        .login-form {
            width: 25rem;
            height: 25.75rem;
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
        <li><a href="page.html">registar</a></li>
        <li><a href="modificar.html">modificar</a></li>
        <li><a href="eliminar.html">eliminar</a></li>
        <li><a href="listar.html">listar</a></li>
    </ul>
</div>
    <div class="login-form padding20 block-shadow">
       <div class="form-actions">
        <form action="#" method="post">
            <h1 class="text-light">FACTURA</h1>
            <hr class="thin"/>
            <br />
            <div class="accordion" data-role="accordion" data-close-any="true">
                            <div class="frame">
                                <div class="heading"><label value="<?php $selpro1 ?>"></label></div>
                                <div class="content">
            <div class="input-control text full-size" data-role="input">
                <label >Precio:</label>
                <input type="text" name="precio1" id="precio1" value="<?php $pre1 ?>">
                <button class="button helper-button clear"><span class="mif-cross"></span></button>
            </div>
               <div class="input-control text full-size" data-role="input">
                <label >Tipo:</label>
                <input type="text" name="tipo1" id="tipo1" value="<?php $tipuni1 ?>">
                <button class="button helper-button clear"><span class="mif-cross"></span></button>
            </div>
               <div class="input-control text full-size" data-role="input">
                <label>Cantidad:</label>
                <input type="text" name="cantidad1" id="cantidad1" value="<?php $can1 ?>">
                <button class="button helper-button clear"><span class="mif-cross"></span></button>
            </div>
                  <div class="input-control text full-size" data-role="input">
                <label >IVA:</label>
                <input type="text" name="IVA" id="IVA" value="<?php $iva1 ?>">
                <button class="button helper-button clear"><span class="mif-cross"></span></button>
            </div>
                      <div class="input-control text full-size" data-role="input">
                <label>Total :</label>
                <input type="text" name="total" id="total" value="<?php $total1 ?>">
                <button class="button helper-button clear"><span class="mif-cross"></span></button>
            </div>
                                </div>
                            </div>
                            <div class="frame active">
                                <div class="heading"><label value="<?php $selpro2 ?>"></label></div>
                             <div class="content">
            <div class="input-control text full-size" data-role="input">
                <label >Precio:</label>
                <input type="text" name="precio1" id="precio1" value="<?php $pre2 ?>">
                <button class="button helper-button clear"><span class="mif-cross"></span></button>
            </div>
               <div class="input-control text full-size" data-role="input">
                <label >Tipo:</label>
                <input type="text" name="tipo1" id="tipo1" value="<?php $tipuni2 ?>">
                <button class="button helper-button clear"><span class="mif-cross"></span></button>
            </div>
               <div class="input-control text full-size" data-role="input">
                <label>Cantidad:</label>
                <input type="text" name="cantidad1" id="cantidad1" value="<?php $can2 ?>">
                <button class="button helper-button clear"><span class="mif-cross"></span></button>
            </div>
                  <div class="input-control text full-size" data-role="input">
                <label >IVA:</label>
                <input type="text" name="IVA" id="IVA" value="<?php $iva2 ?>">
                <button class="button helper-button clear"><span class="mif-cross"></span></button>
            </div>
                      <div class="input-control text full-size" data-role="input">
                <label>Total :</label>
                <input type="text" name="total" id="total" value="<?php $total2 ?>">
                <button class="button helper-button clear"><span class="mif-cross"></span></button>
            </div>
                                </div>
                            </div>
                            <div class="frame">
                                <div class="heading"><label value="<?php $selpro3 ?>"></label></div>
                                  <div class="content">
            <div class="input-control text full-size" data-role="input">
                <label >Precio:</label>
                <input type="text" name="precio1" id="precio1" value="<?php $pre3 ?>">
                <button class="button helper-button clear"><span class="mif-cross"></span></button>
            </div>
               <div class="input-control text full-size" data-role="input">
                <label >Tipo:</label>
                <input type="text" name="tipo1" id="tipo1" value="<?php $tipuni3 ?>">
                <button class="button helper-button clear"><span class="mif-cross"></span></button>
            </div>
               <div class="input-control text full-size" data-role="input">
                <label>Cantidad:</label>
                <input type="text" name="cantidad1" id="cantidad1" value="<?php $can3 ?>">
                <button class="button helper-button clear"><span class="mif-cross"></span></button>
            </div>
                  <div class="input-control text full-size" data-role="input">
                <label >IVA:</label>
                <input type="text" name="IVA" id="IVA" value="<?php $iva3 ?>">
                <button class="button helper-button clear"><span class="mif-cross"></span></button>
            </div>
                      <div class="input-control text full-size" data-role="input">
                <label>Total :</label>
                <input type="text" name="total" id="total" value="<?php $total3 ?>">
                <button class="button helper-button clear"><span class="mif-cross"></span></button>
            </div>
                                </div>
                            </div>
  
        </form>
    </div>
</body>
</html>
