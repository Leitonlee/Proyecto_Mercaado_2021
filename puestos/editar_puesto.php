<?php
//ESTA LINEA HACE QUE NO SE MUESTREN LOS WARNINGS
error_reporting(E_ERROR | E_PARSE);
//traigo la conexion a la bbdd
require("../conexion/conexion.php");
//obtengo el id del puesto y lo guardo en la variable $id_puesto
$id_puesto = $_GET['id'];
//consulta para traer el puesto mediante el id
$sql = "select * from puestos where id_puesto = '".$id_puesto."'";
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
			  <h2>Editar Puestos</h2>
			  <br>
		  </div>
    <!--el formulario no tiene el atributo action porque se va a ejecutar en la misma pagina a traves de GET-->
	<form>
	    <!--muestro los datos del sector para poder editar-->
	    <!--guardo el id del sector en un campo oculto-->
		<input type="hidden" name="id" value="<?php echo $fila['id_puesto'] ?>">
		<!--GUARDO EL ID DEL SECTOR EN UN CAMPO OCULTO-->
		<input type="hidden" name="id_sector" value="<?php echo $fila['id_sector'] ?>">
		<!--GUARDO EL NUMERO DEL SECTOR EN UN CAMPO OCULTO-->
		<input type="hidden" name="numeroSector" value="<?php echo $fila['numeroSector'] ?>">
		Número:<input type="text" name="numero" value="<?php echo $fila['numero'] ?>"><br>
		<br>
        Ubicación:<select name="ubicacion">
            <option value="<?php echo $fila['ubicacion'] ?>"><?php echo $fila['ubicacion'] ?></option>
            <option value="frutas y verduras">Frutas y Verduras</option>
            <option value="carnes y lacteos">Carnes y Lacteos</option>
            <option value="pescaderia">Pescaderia</option>
            <option value="polleria">Polleria</option>
            <option value="fiambreria">Fiambreria</option>
        </select> <br><br>
		Servicios:<input type="text" name="servicios" value="<?php echo $fila['servicios'] ?>"><br>
		<br>
		Canon:<input type="text" name="canon" value="<?php echo $fila['canon'] ?>"><br>
		<br>
		Superficie:<input type="text" name="superficie" value="<?php echo $fila['superficie'] ?>"><br>
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
	if(isset($_GET['actualizar'])){
	//recupero el id del puesto y lo guardo en la variable $idP
	$idp = $_GET['id'];
	$id_sector = $_GET['id_sector'];
	$numeroSector = $_GET['numeroSector'];
	//recupero el numero del puesto y lo guardo en la variable $numero
	$numero = $_GET['numero'];
	//recupero la ubicacion del puesto y lo guardo en la variable $ubicacion
	$ubicacion = $_GET['ubicacion'];
	//recupero los servicios del puesto y los guardo en la variable $servicios
    $servicios = $_GET['servicios'];
	//recupero el canon del puesto y lo guardo en la variable $canon
    $canon = $_GET['canon'];
    //recupero la superficie del puesto y la guardo en la variable $superficie
    $superficie = $_GET['superficie'];

    $sql2 = "update puestos set id_sector='".$id_sector."',numero='".$numero."',numeroSector='".$numeroSector."',ubicacion = '".$ubicacion."',servicios = '".$servicios."',canon = '".$canon."',superficie = '".$superficie."' where id_puesto = '".$idp."'";
    //ejecuto la consulta y la guardo en la variable $res
    $res=mysqli_query($conn,$sql2);
    //}
    //si la consulta se ejecuta con exito
    if($res){
		//muesto el mensaje
    	echo '<script>alert("El puesto se actualizó correctamente")</script>';
    	//redirecciono a index.php
    	echo '<script>location.href="index.php"</script>';
    }
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