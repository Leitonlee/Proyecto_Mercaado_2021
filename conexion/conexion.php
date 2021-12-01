<?php 
	/*archivo para realizar la conexiona a la bbdd*/

	//declaro las variables 
	//nombre del servidor, en este caso es localhost
	$servidor = 'localhost';
	//usuario mysql
	$usuario = 'root';
	//clave - Sin cleve -
	$clave = '';
	//nombre de la bbdd
	$db = 'Mercado';

	//hago la conexion
	//la variable $conn es la que uso despues en todos los archivos
	$conn = mysqli_connect($servidor,$usuario,$clave,$db);
	//si no se conecta muestro el mensaje
	if(!$conn){
		echo "No se pudo conectar a la base de datos";
	}
?>