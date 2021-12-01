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
    <title>Clientes</title>
</head>
<body class = "bodyIndex">

<div class="alert alert-danger" role="alert">
    <h1>Mercado Central</h1>
  </div>
  <div class="contenedor">
      <div class="card" style="width: 18rem;"> 
        <div class="card-body1">
          <h3>Menu Clientes</h3>
          <br>
          <div class="contenedor-fotoPortada">
          <img src="imagenes/MercadoLogo.jpg" height="200" width="250"/>
        </div>
        <br>
        <br>
    <!--boton que redirecciona a clientes/index_sectores.php-->
    <button onclick="window.location.href='./clientes/index_sectores.php'">Consultar Sectores</button><br>
    <br><br>
    <!--boton para cerrar sesion-->
    <button onclick="window.location.href='cerrar_sesion.php'">Salir</button>
    </div>
    </div>
        <div class="contenedor-fotoPortada">
          <img src="imagenes/fotoPortada.jpg" height="600" width="800"/>
        </div>
    </div>
  </body>
</html>