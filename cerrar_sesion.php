<?php

//destruyo la sesion
unset($_SESSION['id_usuario']);
unset($_SESSION['nombre_usuario']);
session_destroy();
//redirecciono a index.php
header("Location:index.php");
exit;
?>