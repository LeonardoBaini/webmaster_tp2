<?php 

session_start();
// si no existe usuario, salir
if (!isset($_SESSION["usuario"])) {
	header("Location: index.php");
	die();
} else{
	echo ('Bienvenido '.$_SESSION["usuario"].' (llamado desde validaUsuario.php)');
}

 ?>