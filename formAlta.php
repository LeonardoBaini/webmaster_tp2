<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/estilos.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<title>Alta de Gasto</title>


</head>
<body>
	<?php
  require "validaUsuario.php";
  //Trae las configs del validador.
  //session_start(); ya trae la sesion del require
  // incluso el mensaje de bienvenida
  
  //require "validaUsuario.php";
  include "mysql.php";
  $query='SELECT descripcion FROM `categoria`';
  $instanciaMysql=new miconexion();
  $resultSet=$instanciaMysql->dameResultSet($query);

  ?>
	
	<h1 class="tituloCentrado">Ingrese sus gastos aquí</h1>
  <div class="container">
  <form action="insertInto.php" method="POST">
  <label for="categoria">Categoría</label>
	<select class="custom-select" id="categoria" name="categoria">
  <!--<option selected >Choose...</option>-->

      <?php
      while($row = mysqli_fetch_array($resultSet)){ 
     
      echo "<option value=".$row['descripcion'].">".$row['descripcion']."</option>"; 
     
      }
      ?>   
  	</select>

  <small id="emailHelp" class="form-text text-muted">Categoría donde se asociará el gasto</small>	
  <div class="form-group">
  <label for="monto">Gasto</label>
  <input type="text" class="form-control" id="monto" name="monto" aria-describedby="emailHelp" placeholder="Monto $$$">
  <small id="emailHelp" class="form-text text-muted">Monto asociado a la categoría</small>
  </div>
  </div>
  <div class="form-group paginacionCentrada">
  <button type="submit" class="btn btn-primary">Agregar Gasto</button>
  </div>
</form>
</body>
</div>
</html>