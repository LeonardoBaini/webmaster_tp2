
<?php 
require_once "validaUsuario.php";
?>
<!DOCTYPE html>
<html lang="es">
<head>

<link rel="stylesheet" type="text/css" href="css/estilos.css">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">


<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 


	<title>Tabla</title>

</head>
<body>
  
  <div class="salir">
  <p>Bienvenido 
    <?php
    echo $_SESSION["usuario"];
    ?>
  </p>
   <input type="button" class="btn btn-primary" name="salir" value="Salir" onclick="window.location.href='salir.php'">
  </div>
  
</div>
  <div id="container">
     <video autoplay muted loop>
    <source src="img/piggy.mp4" type="video/mp4">
    </video>
	
	<?php 
	require_once "paginador.php"; 
  ?>    
 <div class="form-group paginacionCentrada">
 <input type="button" class="btn btn-primary" name="generarGasto" value="Nuevo Gasto" onclick="window.location.href='formAlta.php'">
</div>

 </div>
   
 
</body>
</html>

 