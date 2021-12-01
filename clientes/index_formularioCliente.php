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
		<h1>Formulario de Pre-Contrato </h1><br>
		<h3>Complete el siguente Pre-Contrato con todos los datos requeridos: </h3>

<?php
//traigo la conexion a la bbdd
require("../conexion/conexion.php");

//inicio la sesion
/*session_start();
//si el usuario no esta logueado
if(!isset($_SESSION['nombre_admin'])){
echo '<script>alert("sesion no iniciada")</script>';
echo '<script>location.href="../index.php"</script>';
}*/

//obtengo el id del puesto y lo guardo en la variable $id_puesto
//$id_puesto = $_GET['id'];

//consulta para traer el puesto mediante el id
//$sql4 = "select * from puestos where id_puesto = '".$id_puesto."'";

//ejecuto la consulta y la guardo en la variable $resultado
//$resultado = mysqli_query($conn,$sql4);

//recorro la fila
/*while($fila = mysqli_fetch_assoc($resultado)){
	$id_puesto = $fila['id_puesto'];
	
	
	$numero = $filas['numero'];
	$numeroSector = $fila['numeroSector'];
	$ubicacion = $fila['ubicacion'];
	$servicios = $fila['servicios'];
	$canon = $fila['canon'];
	$superficie = $fila['superficie'];
*/
?>

<!--<div>
	<form>-->
		<!--guardo el id del sector en un campo oculto-->
        <!--guardo el id del puesto en un campo oculto-->

    <!--<table>
		<tr>-->
        <!--
					<td align="center"><?php //echo $fila['numero'] ?></td>
					<td align="center"><?php //echo $fila['numeroSector'] ?></td>
					<td align="center"><?php //echo $fila['ubicacion'] ?></td>
					<td align="center"><?php //echo $fila['servicios'] ?></td>
					<td align="center">$<?php //echo $fila['canon'] ?></td>
					<td align="center"><?php //echo $fila['superficie'] ?>m2</td>	
	</tr>
</table>-->
<?php
	//	}
?>
<!--</form>-->
		
		<br><br>
		<!--EN LOS COMBOS DE SECTORES Y PUESTOS HICIMOS QUE LOS TRAIGA DE LA BBDD
			ESTO SIEMPRE SE USA ASI PORQUE SI EN UN FUTURO HAY QUE AGREGAR O ELIMINAR PUESTOS O SECTORES SE MODIFICA EN LA BBDD
		-->

		<!--LE AGRUEGUE EL ACTION PARA QUE CUANDO APRIETEN EL BOTON GUARDAR, LLAME A OTRA PAGINA (guardar_formulario.php)-->
		<form name="form" action="guardar_formulario.php" method="POST">
				<?php 
        			$cons_sectores = "select * from sectores";
        			$res = mysqli_query($conn,$cons_sectores);
           		?>
				Sector: <select name="sectores" required>
            	<option>Seleccione</option>
            	<?php 
            		while($s=mysqli_fetch_array($res)){
            	?>
        		<option value=<?php echo $s['nombre'] ?>><?php echo $s['nombre'] ?></option>
        		
        		<?php
        			}
        		?>
        		</select>
        		<?php 
        			$cons_puestos = "select * from puestos";
        			$res2 = mysqli_query($conn,$cons_puestos);
           		?>
				Nro.Puesto: <select name="numero" required>
            	<option>Seleccione</option>
            	<?php 
            		while($p=mysqli_fetch_array($res2)){
            	?>
        		<option value=<?php echo $p['id_puesto'] ?>><?php echo $p['numero'] ?></option>
        		
        		<?php
        			}
        		?>
        	</select>

			<?php 
        			$cons_puestos = "select * from puestos";
        			$res2 = mysqli_query($conn,$cons_puestos);
           		?>
			Canon: <select name="canon" required>
            	<option>Seleccione</option>
            	<?php 
            		while($p=mysqli_fetch_array($res2)){
            	?>
        		<option value=<?php echo $p['canon'] ?>><?php echo $p['canon'] ?></option>
        		
        		<?php
        			}
        		?>
        	</select>

			<br><br>
		Nombres: <input type="text" name="nombres" required>
		Apellidos: <input type="text" name="apellidos" required>
		<br><br>
		DNI: <input type="text" name="dni">
		<br><br>
		Domicilio: <input type="text" name="domicilio" required>
		Localidad: <input type="text" name="localidad" required>
		Provincia: <input type="text" name="provincia" required>
		CP: <input type="text" name="cp" required>
		<br><br>
		Telefono: <input type="text" name="telefono" required>
		mail: <input type="text" name="mail" required>
		<br><br>
		Fecha de Inicio: <input type="text" name="fechaInicio" required>
		Fecha final: <input type="text" name="fechaFinal" required>
        <br><br>
		<input type="submit" name="guardar" value="Guardar Formulario">
	</form>
	<br><br>
		<button onclick="window.location.href='./index_puestos.php'">Volver</button>
</div>

<?php
?>
	</body>
</html>