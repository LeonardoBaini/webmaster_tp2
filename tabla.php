
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<title>Tabla</title>

</head>
<body>
	
	<?php 
	//require "validaUsuario.php";
  include "mysql.php";
	//Trae las configs del validador.
	//session_start(); ya trae la sesion del require
	// incluso el mensaje de bienvenida
	
  $instanciaMysql=new miconexion();
  $resultSet=$instanciaMysql->dameResultSet('select * from gastos');



	?>

	<div class="salir">
	<a href="salir.php">SALIR</a>
	</div>	
	<h3 class="tituloCentrado">GRILLA DE CONTROL DE GASTOS</h3>
  
<table class="table table-striped">
  <thead>
    <tr>
      
      <th scope="col">Gasto_id</th>
      <th scope="col">Usuario_id</th>
      <th scope="col">Categoria_id</th>
      <th scope="col">Monto</th>
    </tr>
  </thead>
  <tbody>
    <tr>
     
      <?php
      while($row = mysqli_fetch_array($resultSet)){
      /*
      echo $row['gasto_id']. " - ". $row['categoria_id']. " - ". $row['monto'];
       echo "<br />";
       */
      echo "<td>".$row['gasto_id']."</td>";
      echo "<td>".$row['usuario_id']."</td>";
      echo "<td>".$row['categoria_id']."</td>";
      echo "<td>".$row['monto']."</td>";
      echo "</tr>";
      }
      ?>
      
      
    
    
  </tbody>
</table>
<div class="paginacionCentrada">


  <ul class="pagination">
    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link" href="#">Next</a></li>
  </ul>

</div>
 <div class="form-group paginacionCentrada">
 		<a href="formAlta.php" type="button" class="btn btn-primary">Dar de Alta</a>
        <button type="button" class="btn btn-primary ">Log in</button>
         <button type="button" class="btn btn-primary ">Log in</button>
        </div>

          
</body>
</html>

 