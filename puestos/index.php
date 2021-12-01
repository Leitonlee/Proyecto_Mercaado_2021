<?php
//traigo la conexion a la bbdd
require("../conexion/conexion.php");
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
	    //consulta para traer los puestos
		$sql = 'select * from puestos';
		//ejecuto la consulta y la guardo en la variable $resultado
		$resultado = mysqli_query($conn,$sql);
	?>
	<div>
		<div class="alert alert-danger" role="alert">
    		<h1>Mercado Central</h1>
  			</div>
	    	<!--boton que redirecciona a agregar_puesto.php-->
			<button onclick="window.location.href='agregar_puesto.php'">Agregar Puesto</button>
			<!--boton para cerrar sesion-->
			<button onclick="window.location.href='../menu_admin.php'">Volver</button>
			<br><br>
			<!--tabla para mostrar los puestos-->
			<table class="table-info">
			<thead>
				<tr>
					<th>NÚMERO</th>
					<th>UBICACIÓN</th>
					<th>SERVICIOS</th>
					<th>CANON</th>
					<th>SUPERFICIE</th>
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
						<td align="center" ><?php echo $filas['numero'] ?></td>
						<td align="center" ><?php echo $filas['ubicacion'] ?></td>
						<td align="center" ><?php echo $filas['servicios'] ?></td>
						<td align="center" >$<?php echo $filas['canon'] ?></td>
						<td align="center" ><?php echo $filas['superficie'] ?>m2</td>
						<td>
					    	<!--boton que redirecciona a editar_puesto.php con el id del puesto-->
							<button onclick="window.location.href='editar_puesto.php?id=<?php echo $filas['id_puesto'] ?>'">Editar</button>
                        	<!--boton que redirecciona a eliminar_puesto.php con el id del puesto-->
							<button onclick="window.location.href='eliminar_puesto.php?id=<?php echo $filas['id_puesto'] ?>'">Eliminar</button>
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