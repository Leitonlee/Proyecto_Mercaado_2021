<?php
//ESTA LINEA HACE QUE NO SE MUESTREN LOS WARNINGS
error_reporting(E_ERROR | E_PARSE);
//traigo la conexion a la bbdd
require("../conexion/conexion.php");
//obtengo el id del sector y lo guardo en la variable $id_sector
$id_sector = $_GET['id'];
//consulta para traer el sector mediante el id
$sql = "select * from sectores where id_sector = '".$id_sector."'";
//ejecuto la consulta y la guardo en la variable $resultado
$resultado = mysqli_query($conn,$sql);
//recorro la fila
while($fila = mysqli_fetch_assoc($resultado)){
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
		<div>
			  <h2>Editar Sectores</h2>
			  <br>
		</div>
<div>
	<!--el formulario no tiene el atributo action porque se va a ejecutar en la misma pagina a traves de GET-->
	<form>
		<!--muestro los datos del sector para poder editar-->
		<!--guardo el id del sector en un campo oculto-->
		<input type="hidden" name="id" value="<?php echo $fila['id_sector'] ?>">
		Nro.:  <?php echo $fila['numeroSector'] ?><br>
		<br>
		Sector: <select name="sectores">
			<option value="<?php echo $fila['nombre'] ?>"><?php echo $fila['nombre'] ?></option>
			<option value="frutas y verduras">Frutas y Verduras</option>
			<option value="carnes y lacteos">Carnes y Lácteos</option>
			<option value="pescaderia">Pescadería</option>
			<option value="polleria">Pollería</option>
			<option value="panaderia">Panadería</option>
		</select>
		<br><br>
		Ubicación: <select name="ubicacion">
			<option value="<?php echo $fila['ubicacion'] ?>"><?php echo $fila['ubicacion'] ?></option>
			<option value="centro">Centro</option>
			<option value="este">Este</option>
			<option value="oeste">Oeste</option>
			<option value="norte">Norte</option>
			<option value="sur">Sur</option>
		</select> <br><br>
		Servicios: <input type="text" name="servicios" value="<?php echo $fila['servicios'] ?>"><br>
		<br>
		Puestos: <input type="text" name="puestos" value="<?php echo $fila['puestos'] ?>"><br>
		<br>
		<!--boton submit para actualizar-->
		<input type="submit" name="actualizar" value="Actualizar">
		<!--boton para volver-->
		<a href="index.php">Volver</a>
	</form>
	<?php
		}
	?>
</div>
<?php
	//traigo la conexion a la bbdd
	require("../conexion/conexion.php");
	//recupero el id del sector y lo guardo en la variable $ids
	$ids = $_GET['id'];
	//recupero el nombre del sector y lo guardo en la variable $nombre
	$nombre = $_GET['sectores'];
	//recupero la ubicacion del sector y lo guardo en la variable $ubicacion
	$ubicacion = $_GET['ubicacion'];
	//recupero los servicios del sector y lo guardo en la variable $servicios
	$servicios = $_GET['servicios'];
	//recupero el puesto del sector y lo guardo en la variable $puesto
	$puestos = $_GET['puestos'];

	//si todos los campos estan llenos
	if($nombre != null || $ubicacion != null || $servicios != null || $puestos != null){
		//consulta para actualizar
		$sql2 = "update sectores set nombre='".$nombre."',nombre='".$nombre."',ubicacion = '".$ubicacion."',servicios = '".$servicios."',puestos = '".$puestos."' where id_sector = '".$ids."'";
		//ejecuto la consulta y la guardo en la variable $res
		$res = mysqli_query($conn,$sql2);
		}
		//si la consulta se ejecuta con exito
		if($res){
			//muesto el mensaje
			echo '<script>alert("Sector actualizado correctamente")</script>';
			//redirecciono a index.php
			echo '<script>location.href="index.php"</script>';
	    }
?>
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
	</body>
</html>