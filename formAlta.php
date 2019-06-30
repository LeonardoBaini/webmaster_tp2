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
<title></title>


</head>
<body>
	<?php
  require "validaUsuario.php";
  //Trae las configs del validador.
  //session_start(); ya trae la sesion del require
  // incluso el mensaje de bienvenida
  
  ?>
	<div class="salir">
	<a href="salir.php">SALIR</a>
	</div>	
	<h1 class="tituloCentrado">Ingrese sus gastos aquí</h1>
<div class="container">
<form action="tabla.php">
	<select class="custom-select" id="inputGroupSelect01">
    <option selected>Choose...</option>
    <option value="1">One</option>
    <option value="2">Two</option>
    <option value="3">Three</option>
  	</select>
	
  <div class="form-group">
    <label for="gasto1">Gasto</label>
    <input type="text" class="form-control" id="gasto1" aria-describedby="emailHelp" placeholder="Ingrese categoría de gasto">
    <small id="emailHelp" class="form-text text-muted">Categoría donde se asociará el gasto</small>
  </div>
   <div class="form-group">
    <label for="gasto2">Gasto</label>
    <input type="text" class="form-control" id="gasto2" aria-describedby="emailHelp" placeholder="Ingrese monto a gastar">
    <small id="emailHelp" class="form-text text-muted">MOnto que se asociará a la categoría</small>
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</div>
</html>