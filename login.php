<?php
include "mysql.php";
$username = $_POST["username"];
$password = $_POST["password"];
$usernameFromDB;
$passwordFromDB;
$query="select usuario,
password from usuario where usuario='".$username."' and password= '".$password."'";

//echo $query;

$instanciaMysql=new miconexion();

$instanciaConexion=$instanciaMysql->conexion();

$consulta=mysqli_query($instanciaConexion,$query);
 
$fila = mysqli_fetch_array($consulta);

 $usernameFromDB=$fila['usuario'];
 $passwordFromDB=$fila['password'];

mysqli_close($instanciaConexion);

/*
echo $usernameFromDB;
echo "<br>";
echo $passwordFromDB;
*/

if ($username==$usernameFromDB && $password==$passwordFromDB) {
	session_start();
	$_SESSION["usuario"]=$username;
	header("Location: tabla.php");
} else {
	
	echo '<script language="javascript">
	alert("Error de autentificacion");
	window.location.href="index.php"</script>';
	

}

?>