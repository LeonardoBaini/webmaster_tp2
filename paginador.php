<?php
require "validaUsuario.php";
include "mysql.php";
$CantidadMostrar=8;
//Conexion  al servidor mysql

$instanciaMysql=new miconexion();
$resultSet=$instanciaMysql->dameResultSet("SELECT *  FROM `gastos`");

                    // Validado  la variable GET
    $compag         =(int)(!isset($_GET['pag'])) ? 1 : $_GET['pag']; 
	$TotalReg       =$resultSet->num_rows;
		  
	//Se divide la cantidad de registro de la BD con la cantidad a mostrar 

  	$TotalRegistro  =ceil($TotalReg/$CantidadMostrar);

    if(($compag +1)<=$TotalRegistro){
        echo "<br><strong>Mostrando ".$CantidadMostrar*$compag." de ".$TotalReg."</strong>";
    }else{
        echo "<br><strong>Fin de los resultados.</strong>";
    }
    
   	
	//Consulta SQL
	$consultavistas ="SELECT 
						usr.usuario,
						cat.descripcion,
						gas.monto,
						gas.fecha

						FROM `gastos` gas
						inner join categoria cat on gas.categoria_id=cat.categoria_id
						inner join usuario usr on gas.usuario_id=usr.user_id
						order by gas.fecha desc
						LIMIT ".(($compag-1)*$CantidadMostrar)." , ".$CantidadMostrar;
                       // echo $consultavistas;

    $instanciaMysql2=new miconexion();
    $resultSet2=$instanciaMysql2->dameResultSet($consultavistas);

	echo "<table class='table table-striped'><tr><th>Usuario</th><th>Descripcion</th><th>Monto</th><th>Fecha</th></tr>";

	while ($lista=$resultSet2->fetch_row()) {
	     echo "<tr><td>".$lista[0]."</td><td>".$lista[1]."</td><td>".$lista[2]."</td><td>".$lista[3]."</td></tr>";
	}
	     echo "</table>";
     
    /*Sector de Paginacion */
    
    //Operacion matematica para boton siguiente y atras 
	$IncrimentNum =(($compag +1)<=$TotalRegistro)?($compag +1):1;
  	$DecrementNum =(($compag -1))<1?1:($compag -1);
    echo "<div class='paginacionCentrada'>";
	echo "<ul class='pagination'><li class=\"page-item\"><a class='page-link' href=\"?pag=".$DecrementNum."\">◀</a></li>";
    //Se resta y suma con el numero de pag actual con el cantidad de 
    //numeros  a mostrar
     $Desde=$compag-(ceil($CantidadMostrar/2)-1);
     $Hasta=$compag+(ceil($CantidadMostrar/2)-1);
     
     //Se valida
     $Desde=($Desde<1)?1: $Desde;
     $Hasta=($Hasta<$CantidadMostrar)?$CantidadMostrar:$Hasta;
     //Se muestra los numeros de paginas
     for($i=$Desde; $i<=$Hasta;$i++){
     	//Se valida la paginacion total
     	//de registros
     	if($i<=$TotalRegistro){
     		//Validamos la pag activo
     	  if($i==$compag){
           echo "<li class=\"page-item\"><a class='page-link' href=\"?pag=".$i."\">".$i."</a></li>";
     	  }else {
     	  	echo "<li class=\"page-item\"><a class='page-link' href=\"?pag=".$i."\">".$i."</a></li>";
     	  }     		
     	}
     }
	echo "<li class=\"page-item\"><a class='page-link' href=\"?pag=".$IncrimentNum."\">▶</a></li></ul>";
    echo "</div>";
  

?>