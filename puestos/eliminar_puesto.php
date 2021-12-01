<?php
//traigo la conexion a la bbdd
require("../conexion/conexion.php");
//recupero el id del puesto y lo guardo en la variable $id_puesto
$id_puesto = $_GET['id'];
//consulta para eliminar registro segun id
$sql = "delete from puestos where id_puesto = '".$id_puesto."'";
//ejecuto la consulta y la guardo en la variable $resultado
$resultado = mysqli_query($conn,$sql);
if($resultado){
			//muesto el mensaje
			echo '<script>alert("El Puesto fue eliminado correctamente")</script>';
			//redirecciono a index.php
			echo '<script>location.href="index.php"</script>';

}

