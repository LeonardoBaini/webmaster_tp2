<?php
require_once "validaUsuario.php";
?>
<!DOCTYPE html>
<html lang="es">
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
  
  include "mysql.php";
  $query='SELECT descripcion FROM `categoria`';
  $instanciaMysql=new miconexion();
  $resultSet=$instanciaMysql->dameResultSet($query);

  ?>
 
  <img class="imagenDeFondo" src="img/piggy-bank.jpg">
  
  <div class="salir">
  <p>Bienvenido 
    <?php
    echo $_SESSION["usuario"];
    ?>
  </p>
   <input type="button" class="btn btn-primary" name="salir" value="Salir" onclick="window.location.href='salir.php'">
  </div>
  
</div>
	<div class="container">
	<h1 class="tituloCentrado">Ingrese sus gastos aquí</h1>
  <div class="container">
  <form action="insertInto.php" method="POST">
  <label class="etiquetaBlanca" for="categoria">Categoría</label>
	<select class="custom-select" id="categoria" name="categoria">
  <!--<option selected >Choose...</option>-->

      <?php
      while($row = mysqli_fetch_array($resultSet)){ 
     
      echo "<option value=".$row['descripcion'].">".$row['descripcion']."</option>"; 
     
      }
      ?>   
  	</select>

  <small id="emailHelp" class="form-text etiquetaBlanca">Categoría donde se asociará el gasto</small>	
  <div class="form-group">
  <label  class="etiquetaBlanca" for="monto">Gasto</label>
  <input type="text" class="form-control" id="monto" name="monto" aria-describedby="emailHelp" placeholder="Monto $$$" required>
  <small id="emailHelp" class="form-text etiquetaBlanca">Monto asociado a la categoría</small>
  </div>
  </div>
  <div class="form-group paginacionCentrada">
  <button type="submit" class="btn btn-primary">Agregar Gasto</button>
  </div>
</form>
</div> 
</body>
</div>
</html>