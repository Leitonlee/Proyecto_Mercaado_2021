<?php
//traigo la conexion a la bbdd
require_once('conexion/conexion.php');
?>
<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel = "stylesheet" href = "estilos.css">
    <meta charset="utf-8">
    <title>Aministrador</title>
</head>
<body class="bodyIndex">
    <div class="alert alert-danger" role="alert">
      <h1>Mercado Central</h1>
    </div>
    <div class="contenedor">
      <div class="card" style="width: 18rem;"> 
        <div class="card-body1">  
         <h4>Menú Administrador</h4>
         <br>
         <div class="contenedor-fotoPortada">
          <img src="imagenes/MercadoLogo.jpg" height="200" width="250"/>
        </div>
        <br>
        <br>
          <!--boton que redirecciona a sectores/index.php-->
          <button onclick="window.location.href='sectores/index.php'">Administrar Sectores</button><br>
          <br>
          <!--boton que redirecciona a puestos/index.php-->
          <button onclick="window.location.href='puestos/index.php'">Administrar Puestos</button><br>
          <br><br>
          <!--boton que redirecciona a adPreContr/index.php-->
          <button onclick="window.location.href='admin/adPreContr.php'">Administrar Pre-Contratos</button><br>
          <br><br>
          <!--boton para cerrar sesion-->
          <button onclick="window.location.href='../mercado'">Salir</button>
        </div>
      </div>
      <div class="contenedor-fotoPortada">
          <img src="imagenes/fotoPortada.jpg" height="600" width="800"/>
        </div>
    </div>
</body>
</html>