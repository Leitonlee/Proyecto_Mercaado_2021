<?php
//inicio la sesion
/*session_start();
//guardo los datos en variables de sesion
		$_SESSION['id_usuario'] = $f['id_usuario'];
		$_SESSION['nombre_admin'] = $f['nombre_usuario'];
		$_SESSION['rol'] = $f['rol'];*/
//traigo la conexion a la bbdd
require_once 'conexion/conexion.php';
//recupero el valor del input usuario
$usuario = $_POST['usuario'];
//recupero el valor del input clave
$clave = $_POST['clave'];

//hago la consulta a la bbdd para ver si existe el usuario
$resultados = mysqli_query($conn, "SELECT * from usuarios where nombre_usuario = '$usuario' and clave = '$clave'");

//si existe
if ($f = mysqli_fetch_array($resultados)) {

	//pregunto si el rol es admin
	if($f['rol'] == "admin"){
		//echo '<script>alert("admin")</script>';
		//como tiene rol admin lo redirecciono a menu_admin.php
		header("Location:menu_admin.php");
	//si no es admin, pregunto si es cliente	
	}else if ($f['rol'] == "cliente"){
		//guardo los datos en variables de sesion
		/*$_SESSION['id_usuario'] = $f['id_usuario'];
		$_SESSION['nombre_usuario'] = $f['nombre_usuario'];
		$_SESSION['rol'] = $f['rol'];*/
		//lo redirecciono a menu_cliente.php
		header("Location:menu_clientes.php");
	}
//si no existe en la bbdd, muestro mensaje	
} else {
	//echo '<script>alert(".$f['nombre_usuario'].")</script>';
	echo '<script>alert("Usuario y/o clave incorrectos")</script>';
	echo '<script>location.href="index.php"</script>';
}
?>