<?php class miconexion {

/**
* Gestiona la conexión con la base de datos
*/

private $dbhost = 'localhost';

private $dbuser = 'root';

private $dbpass = '';

private $dbname = 'webmaster';

public function conexion () {

/**
* @return object link_id con la conexión
*/

$link_id = new mysqli($this->dbhost,$this->dbuser,$this->dbpass,$this->dbname);

if ($link_id ->connect_error) {

echo "Error de Connexion ($link_id->connect_errno)

$link_id->connect_error\n";

exit;

} else {

return $link_id;

}

}



public function dameResultSet($query){
/**
* @return devuelve el resulset para ser recorrido por el mysqli_fetch_array();
*/

$instanciaMysql=new miconexion();

$instanciaConexion=$instanciaMysql->conexion();

$consulta=mysqli_query($instanciaConexion,$query) or die(mysql_error());
 
mysqli_close($instanciaConexion);

return $consulta;
}



} ?>