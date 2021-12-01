<?php
//traigo la conexion a la bbdd
require("../conexion/conexion.php");
//recupero el id del sector y lo guardo en la variable $id_sector
$id_sector = $_GET['id'];
//consulta para eliminar registro segun id
$sql = "delete from sectores where id_sector = '".$id_sector."'";
//ejecuto la consulta y la guardo en la variable $resultado
$resultado = mysqli_query($conn,$sql);
	if($resultado){
			//muesto el mensaje
			echo '<script>alert("El Sector fue eliminado correctamente")</script>';
			//redirecciono a index.php
			echo '<script>location.href="index.php"</script>';
				
}
