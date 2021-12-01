<?php
//ESTA LINEA HACE QUE NO SE MUESTREN LOS WARNINGS
error_reporting(E_ERROR | E_PARSE);
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

<body class = "bodyIndex">
	<div>
		<div class="alert alert-danger" role="alert">
    		<h1>Mercado Central</h1>
  		</div>

		<form>
			<h2>Agregar Sector</h2>
			<br>
			Nro. Sector: <input type="text" name="numeroSector"><br>
			<br>
			<!--Muestro un menu desplegable con los nombres de los sectores-->
        	<!--guardo el id del sector en un campo oculto-->
        	<input type="hidden" name="id" value="<?php echo $fila['id_sector'] ?>">
        	Sector: <select name="sectores">
            	<option>Seleccione</option>
        		<option value="frutas y verduras">Frutas y Verduras</option>
        		<option value="carnes y lacteos">Carnes y Lácteos</option>
        		<option value="pescaderia">Pescadería</option>
        		<option value="polleria">Pollería</option>
        		<option value="panaderia">Fiambreria</option>

        	</select>
			<br><br>
			Ubicación: <select name="ubicacion">
				<option>Seleccione</option>
				<option value="centro">Centro</option>
				<option value="este">Este</option>
				<option value="oeste">Oeste</option>
				<option value="norte">Norte</option>
				<option value="sur">Sur</option>
			</select>
			<br><br>

			Servicios: <input type="text" name="servicios" placeholder="Luz, Gas, Agua, Teléfono, Internet" style="width: 220px;"><br>
			<br>
			Puestos: <input type="text" name="puestos"><br>
			<br><br>
			<input type="submit" name="agregar" value="Agregar">
			<!--boton para volver-->
			<a href="index.php">Volver</a>
		</form>
	</div>
<?php
    //traigo la conexion a la bbdd
	require("../conexion/conexion.php");
	$id_sector = $_GET['id_sector'];
	$numeroSector = $_GET['numeroSector'];
	$nombre = $_GET['sectores'];
	$ubicacion = $_GET['ubicacion'];
	$servicios = $_GET['servicios'];
	$puestos = $_GET['puestos'];

	if($nombre != null || $ubicacion != null){
		$sql = "insert into sectores(id_sector,numeroSector,nombre,ubicacion,servicios,puestos)values('".$id_sector."','".$numeroSector."','".$nombre."','".$ubicacion."','".$servicios."','".$puestos."')";
		mysqli_query($conn,$sql);
		if($nombre=1){
			echo "<script>alert('Sector agregado correctamente')</script>";
			header("location:index.php");
		}
	}
?>
</body>
</html>