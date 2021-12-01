<?php 
//traigo la conexion a la bbdd
require("../conexion/conexion.php");
//inicio la sesion
/*session_start();
//guardo el nombre del cliente en una variable de sesion
$cliente = $_SESSION['nombre_usuario'];*/
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
		<h1>Listado de Puestos </h1>
	<?php
		//consulta para traer todos los puestos
		//$sql = 'select * from puestos';
		$sql = 'select * from puestos';
		//ejecuto la consulta y la guardo en una variable $resultado
		$resultado = mysqli_query($conn,$sql);
	?>
	<div>
		<table border="1">
			<thead>
				<tr>
					<th>Nro. Puesto</th>
					<th>Nro. Sector</th>
					<th>Nombre Sector</th>
					<th>SERVICIOS</th>
					<th>CANON</th>
					<th>SUPERFICIE</th>
				</tr>
			</thead>
			<tbody>
				<?php
					//recorro la fila
					while($filas = mysqli_fetch_assoc($resultado)){
				?>
				<tr>
					<!--muestro los campos-->
					<!--<input type="hidden" name="id" value="<?php //echo $filas['id_puesto'] ?>">-->
					<td align="center"><?php echo $filas['numero'] ?></td>
					<td align="center"><?php echo $filas['numeroSector'] ?></td>
					<td align="center"><?php echo $filas['ubicacion'] ?></td>
					<td align="center"><?php echo $filas['servicios'] ?></td>
					<td align="center">$<?php echo $filas['canon'] ?></td>
					<td align="center"><?php echo $filas['superficie'] ?>m2</td>
					<td>
                        </td>
				</tr>
				<?php
					}
				?>
			</tbody>
		</table>
		<br>
		<!--boton que redirecciona a index_formularioCliente.php - Aqui nos muestra el Formulario de Alquiler-->
		<button onclick="window.location.href='index_formularioCliente.php'">Alquilar</button><br>
		<br>
        <!--boton para volver a la vista de los sectores-->
        <button onclick="window.location.href='./index_sectores.php'">Volver</button>

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