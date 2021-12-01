<?php 
//traigo la conexion a la bbdd
require("../conexion/conexion.php");

?>
<!DOCTYPE html>
<html>
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel = "stylesheet" href = "estilos.css">
	<meta charset="utf-8">
	<title>Mercado Central</title>
</head>
<body>
		<div class="alert alert-danger" role="alert">
    		<h1>Mercado Central</h1>
  		</div>
		<h1>Listado de Sectores </h1>
	<?php
		//consulta para traer todos los sectores y mostrarselos al Cliente
		$sql = 'select * from sectores';
		//ejecuto la consulta y la guardo en una variable $resultado
		$resultado = mysqli_query($conn,$sql);
	?>
	<div>
		<table border="1">
			<thead>
				<tr>
				    <th>Nro.</th>
					<th>NOMBRE</th>
					<th>UBICACIÓN</th>
					<th>SERVICIOS</th>
					<th>PUESTOS</th>
				</tr>
			</thead>
			<tbody>
				<?php
					//recorro la fila
					while($filas = mysqli_fetch_assoc($resultado)){
				?>
				<tr>
					<!--muestro los campos-->
					<td align="center"><?php echo $filas['numeroSector'] ?></td>
					<td align="center"><?php echo $filas['nombre'] ?></td>
					<td align="center"><?php echo $filas['ubicacion'] ?></td>
					<td align="center"><?php echo $filas['servicios'] ?></td>
					<td align="center"><?php echo $filas['puestos'] ?></td>
					<td>
                    	</td>
				</tr>
				<?php
					}
				?>
			</tbody>
		</table> <br>

		<!--boton que redirecciona a puestos/indexPuestos.php y muestra los puestos del secto, con el id del sector-->
		<button onclick="window.location.href='./index_puestos.php'">Consultar Puestos</button><br>
		<br>
        <!--boton para cerrar sesion-->
        <button onclick="window.location.href='../menu_clientes.php'">Volver</button>

		<!--boton para cerrar sesion-->
		<button onclick="window.location.href='../cerrar_sesion.php'">Salir</button>
	</div><br>
			<div class="contenedor">      		 
        		<div class="card-body1">
					<div class="contenedor-fotoPortada">
          			<img src="../imagenes/frutasVerduras.jpg" height="300" width="300"/>
          			<img src="../imagenes/carniceria.jpg" height="300" width="300"/>
          			<img src="../imagenes/polleria.jpg" height="300" width="300"/>
          			<img src="../imagenes/pescaderia.jpg" height="300" width="300"/>
          			<img src="../imagenes/fiambreria.jpg" height="300" width="300"/>
				</div>
        	</div>
</body>
</html>