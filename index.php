<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<link rel="stylesheet" type="text/css" href="css/estilos.css">
<script type="text/javascript" src="css/javascript.js"></script>
<title>Login</title>
</head>

<body>
<div id="container">
<video autoplay muted loop>
    <source src="img/tierra2.mp4" type="video/mp4">
  </video>
<h1>Bienvenido a Cash Control</h1>
<div class="login-form">
    <form action="login.php" method="post">
        <h2 class="text-center">LOGIN</h2>       
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Username" name="username" required="required">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" placeholder="Password" name="password" required="required">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Log in</button>
        </div>

        <input type="button"  class="btn btn-primary btn-block" name="ayuda" value="Help" onclick="alert('usuario=lbaini pass=leo123')">
          
    </form>
    
</div>
</div>
</body>
</html>                                		                            