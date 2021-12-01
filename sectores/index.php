<?php 
//traigo la conexion a la bbdd
require("../conexion/conexion.php");
//inicio la sesion
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel = "stylesheet" href = "estilos.css">
	<meta charset="utf-8">
	<title>Mercado Central</title>
</head>
<body class = "bodyIndex">
	<?php
		//consulta para traer los sectores
		$sql = 'select * from sectores';
		//ejecuto la consulta y la guardo en la variable $resultado
		$resultado = mysqli_query($conn,$sql);
	?>
	<div>
		<div class="alert alert-danger" role="alert">
    	<h1>Mercado Central</h1>
  		</div>
		<!--boton que redirecciona a agregar_sector.php-->
		<button onclick="window.location.href='agregar_sector.php'">Agregar Sector</button>
		<!--boton para cerrar sesion-->
		<button onclick="window.location.href='../menu_admin.php'">Volver</button>
		<br><br>	
		<!--tabla para mostrar los sectores-->
		<table class="table-info">
			<thead>
				<tr>
					<th>Nro.Sector</th>
					<th>NOMBRE</th>
					<th>UBICACIÓN</th>
					<th>SERVICIOS</th>
					<th>PUESTOS</th>
					<th>ACCIÓN</th>
				</tr>
			</thead>
			<tbody>
				<?php
					//mientras hayan filas en la query
					while($filas = mysqli_fetch_assoc($resultado)){
				?>
				<tr>
					<!--muestro los campos de la tabla sectores-->
					<td align="center"><?php echo $filas['numeroSector'] ?></td>
					<td align="center"><?php echo $filas['nombre'] ?></td>
					<td align="center"><?php echo $filas['ubicacion'] ?></td>
					<td align="center"><?php echo $filas['servicios'] ?></td>
					<td align="center"><?php echo $filas['puestos'] ?></td>
					<td>
						<!--boton que redirecciona a editar_sector.php con el id del sector-->
						<button onclick="window.location.href='editar_sector.php?id=<?php echo $filas['id_sector'] ?>'">Editar</button>
						<!--boton que redirecciona a eliminar_sector.php con el id del sector-->
						<button onclick="window.location.href='eliminar_sector.php?id=<?php echo $filas['id_sector'] ?>'">Eliminar</button>
					</td>
				</tr>
				<?php
					}
				?>
			</tbody>
		</table>
		<br>
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
		</div>
	</div>
</body>
</html>