<?php
    //traigo la conexion a la bbdd
	require("../conexion/conexion.php");

	//SI SE PRESIONA EL BOTON GUARDAR DEL FORMULARIO
	if(isset($_POST['guardar'])){
	//OBTENGO LOS DATOS DE LOS CAMPOS	
	$sector = $_POST['sectores'];//lista sectores
	$puesto = $_POST['numero'];//lista puestos
	$canon = $_POST['canon'];//lista puestos
	$nombres = $_POST['nombres'];
	$apellidos = $_POST['apellidos'];
	$dni = $_POST['dni'];
	$domicilio = $_POST['domicilio'];
	$localidad = $_POST['localidad'];
	$provincia = $_POST['provincia'];
	$cp = $_POST['cp'];
	$localidad = $_POST['localidad'];
	$telefono = $_POST['telefono'];
	$mail = $_POST['mail'];
	$fechaInicio = $_POST['fechaInicio'];
	$fechaFinal = $_POST['fechaFinal'];

	//SI NO SE SELECCIONO NADA DEL COMBO SECTORES
	if($sector == "Seleccione"){
		echo '<script>alert("DEBE SELECCIONAR UN SECTOR")</script> ';
		echo '<script>location.href="index_formularioCliente.php"</script>';

	//SI NO SE SELECCIONO NADA DEL COMBO PUESTOS	
	}elseif($puesto == "Seleccione"){
		echo '<script>alert("DEBE SELECCIONAR UN PUESTO")</script> ';
		echo '<script>location.href="index_formularioCliente.php"</script>';

	//SI PASA LAS VALIDACIONES	
	}else{
		$consulta = "insert into formulariocliente (sector,id_puesto,canon,nombres,apellidos,dni,domicilio,localidad,provincia,cp,telefono,fechaInicio,fechaFinal,mail)values('$sector','$puesto','$canon','$nombres','$apellidos','$dni','$domicilio','$localidad', '$provincia','$cp','$telefono','$fechaInicio','$fechaFinal','$mail')";
		$resultado=mysqli_query($conn,$consulta);

		//SI EJECUTA EL INSERT
		if($resultado){
			//MUESTRO MENSAJE DE CONFIRMACION
			echo "<script>alert('Formulario cargado correctamente. Lo llamaremos a la brevedad')</script>";
			//REDIRECCIONO AL FORMULARIO
			echo '<script>location.href="indexFinFormularioCli.php"</script>';
		
		//SI NO EJECUTA EL INSERT		
		}else{
			//MUESTRO MENSAJE DE ERROR
			echo "<script>alert('Error al guardar el formulario')</script>";
			//REDIRECCIONO AL FORMULARIO
			echo '<script>location.href="index_formularioCliente.php"</script>';
		}
	}//FIN IF SI PASA LAS VALIDACIONES
		
	
}//FIN IF SI SE PRESIONA EL BOTON GUARDAR FORMULARIO
?>