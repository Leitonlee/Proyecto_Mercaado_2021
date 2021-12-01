<?php
//ESTA LINEA HACE QUE NO SE MUESTREN LOS WARNINGS
error_reporting(E_ERROR | E_PARSE);
require("../conexion/conexion.php");

$sectores = "select * from sectores";
$res = mysqli_query($conn,$sectores);
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
		<h2>Agregar Puestos</h2><br>
		<br>
		Sector: <select name="sectores">
			<?php
		while($fila = mysqli_fetch_assoc($res)){

		?>

			<option value="<?php echo $fila['id_sector'] ?>"><?php echo $fila['nombre'] ?></option>
		<?php
			}
		?>
		<input type="hidden" name="numeroSector" value="<?php echo $fila['numeroSector'] ?>">
		</select>
		<br><br>
	    	Nro. Puesto: <input type="text" name="numero"> <br>
	    	<br>
	    	<!--Muestro un menu desplegable con los posibles nombres de los sectores donde  al que va a pertenecer el puesto-->
	    	Ubicacion: <select name="ubicacion">
        			<option>Seleccione</option>
        			<option value="frutas y verduras">Frutas y Verduras</option>
                    <option value="carnes y lacteos">Carnes y Lácteos</option>
                    <option value="pescaderia">Pescadería</option>
                    <option value="polleria">Pollería</option>
                    <option value="fiambreria">Fiambreria</option>
        			</select>
        		<br> <br>
			Servicios: <input type="text" name="servicios" placeholder="Luz, Gas, Agua, Teléfono, Internet" style="width: 220px;"><br>
			<br>
        	Canon: <input type="text" name="canon"><br>
        	<br>
			Superficie: <input type="text" name="superficie"><br>
        	<br><br>
			<input type="submit" name="agregar" value="Agregar">
			<a href="index.php">Volver</a>
		</form>
	</div>
<?php
     //traigo la conexion a la bbdd
	require("../conexion/conexion.php");
	$id_puesto = $_GET['numero'];
    $id_sector = $_GET['sectores'];
	$numeroSector = $_GET['numeroSector'];
    $numero = $_GET['numero'];
    $ubicacion = $_GET['ubicacion'];
    $servicios = $_GET['servicios'];
    $canon = $_GET['canon'];
	$superficie = $_GET['superficie'];

	if($numero != null ){
    	$sql = "insert into puestos(id_puesto,id_sector,numero,numeroSector,ubicacion,servicios,canon,superficie)values('".$id_puesto."','".$id_sector."','".$numero."','".$numeroSector."','".$ubicacion."','".$servicios."','".$canon."','".$superficie."')";
    	$resultado=mysqli_query($conn,$sql);
    	if($resultado){
    		echo "<script>alert('Puesto agregado correctamente')</script>";
    		echo '<script>location.href="index.php"</script>';
    	}else {
    		echo "<script>alert('error')</script>";
    	}
    }
?>
</body>
</html>
