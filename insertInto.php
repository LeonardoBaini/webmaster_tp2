<?php 
session_start();
include "mysql.php";
$usuario=$_SESSION["usuario"];
$monto=$_POST["monto"];
$categoria=$_POST["categoria"];

 if(!is_numeric($monto)) {
 	echo '<script language="javascript">
	alert("Ingresó un valor no entero, reintente...");
	window.location.href="formAlta.php"</script>';
 	
 }

$queryUsuario="select user_id from usuario where usuario='".$usuario."';";
$queryCategoria="select categoria_id from categoria where descripcion='".$categoria."';";

$instanciaMysql=new miconexion();

$resultSet=$instanciaMysql->dameResultSet($queryUsuario);
$row=mysqli_fetch_array($resultSet);
$usuario_id=$row['user_id'];

$resultSet=$instanciaMysql->dameResultSet($queryCategoria);
$row1=mysqli_fetch_array($resultSet);
$categoria_id=$row1['categoria_id'];

$sql="INSERT INTO `gastos`
				 (`usuario_id`, `categoria_id`, `monto`, `Fecha`) VALUES 
				 (".$usuario_id.",".$categoria_id.",".$monto.", now())";




if($instanciaMysql->insertar($sql)){ // si retorna true que redireccione a la tabla
	header("Location: ./tabla.php");
}else{
	echo "alert('Hubo un problema, reintente (linea 15 insertInto.php)')";
}


 ?>