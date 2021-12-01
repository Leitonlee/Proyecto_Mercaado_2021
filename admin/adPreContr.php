<?php 
//traigo la conexion a la bbdd
require_once("../conexion/conexion.php");
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
		//consulta para traer los Pre-contratos
		$sql = 'select * from formulariocliente';
		//ejecuto la consulta y la guardo en la variable $resultado
		$resultado = mysqli_query($conn,$sql);
	?>
	<div>
		<div class="alert alert-danger" role="alert">
    	<h1>Mercado Central</h1>
  		</div>
		  <h2>Listado de Pre-contratos</h2><br>
		<!--boton para cerrar sesion-->
		<button onclick="window.location.href='../menu_admin.php'">Volver</button>
		<br><br>	
		<!--tabla para mostrar los Pre-contratos-->
		<table>
			<thead>
				<tr>
					<th>SECTOR</th>
					<th>Nro. PUESTO</th>
					<th>CANON</th>
					<th>NOMBRES</th>
					<th>APELLIDOS</th>
					<th>DNI</th>
					<th>DOMICILIO</th>
					<th>LOCALIDAD</th>
					<th>PROVINCIA</th>
					<th>CP</th>
					<th>TELEFONO</th>
					<th>MAIL</th>
					<th>FECHA INICIO</th>
					<th>FECHA FINAL</th>
				</tr>
			</thead><br>
			<tbody>
				<?php
					//mientras hayan filas en la query
					while($filas = mysqli_fetch_assoc($resultado)){
				?>
				<tr>
					<!--muestro los campos de la tabla formulariocliente-->
					<td align="center"><?php echo $filas['sector'] ?></td>
					<td align="center"><?php echo $filas['id_puesto'] ?></td>
					<td align="center">$<?php echo $filas['canon'] ?></td>
					<td align="center"><?php echo $filas['nombres'] ?></td>
					<td align="center"><?php echo $filas['apellidos'] ?></td>
					<td align="center"><?php echo $filas['dni'] ?></td>
					<td align="center"><?php echo $filas['domicilio'] ?></td>
					<td align="center"><?php echo $filas['localidad'] ?></td>
					<td align="center"><?php echo $filas['provincia'] ?></td>
					<td align="center"><?php echo $filas['cp'] ?></td>
					<td align="center"><?php echo $filas['telefono'] ?></td>
					<td align="center"><?php echo $filas['mail'] ?></td>
					<td align="center"><?php echo $filas['fechaInicio'] ?></td>
					<td align="center"><?php echo $filas['fechaFinal'] ?></td>
					<td>
						<!--boton que redirecciona-->
						<button onclick="window.location.href='indexFinFormularioAdm.php?id=<?php echo $filas['id_formulario'] ;?>'">Aprobar</button>
					</td>
				</tr>
				<?php
					}
				?>
			</tbody>
		</table>
		<br>
		
	</div>
</body>
</html>