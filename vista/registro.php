<!DOCTYPE html>
<html lang="en">
<head>
  <title>Registro Infiltrometro</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
   
     
<!--Animacion-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">

  <link href="css/Inicio.css" rel="stylesheet">


</head>
<body>

<div class="jumbotron text-center">
  <h1>Infiltrometro</h1>
</div>
  
<div class="container text-center">
  <img class="animated bounceInLeft delay-20s" src="img/user.png">

  <form action="registroUser.php" method="post" class="form-group">

<div class="row">
<div class="col-sm-6">
      <br>
    <input type="text" name="Id_Usuario" class="form-control" placeholder="Identificación" required autofocus>
    <br>    
    <input type="text" name="Nombre_Usuario" class="form-control" placeholder="Nombre de Usuario" required autofocus>
    <br>   
    <input type="username" name="Correo" class="form-control" placeholder="Correo" required autofocus>
    <br>

</div>
<div class="col-sm-6">
<br>
 
    <input type="password" name="Contraseña" class="form-control" placeholder="Contraseña" required>
    <br>
    <input type="password" name="cPassword" class="form-control" placeholder="Verifique Contraseña" required>
    <br>
    <input type="text" name="Id_Dispocitivo" class="form-control" placeholder="Codigo dispositivo" required autofocus>
    <br>
</div>
</div>
                 
    
    <button class="btn btn-lg btn-secondary btn-block" type="submit">Registrar Usuario</button>
      
</form>
</div>


<footer class="page-footer font-small unique-color-dark pt-4">

<div class="container">

  <ul class="list-unstyled list-inline text-center py-2">
    <li class="list-inline-item">
      <h5 class="mb-1">Ya se encuatra registrado</h5>
    </li>
    <li class="list-inline-item">
      <button onclick="location='index.php'" type="button" class="btn btn-outline-dark">Iniciar secion</button>
    </li>
  </ul>

</div>

<div class="footer-copyright text-center py-3">© 2019: Ingenieria de Sistemas
  <a href="https://mdbootstrap.com/education/bootstrap/"> InfiltrometroUnicor</a>
</div>

</footer>
<!-- Footer -->

</body>
</html>
