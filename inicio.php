<!DOCTYPE html>
<html lang="en">
<head>
  <title>Inicio</title>
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
<?php require 'vista/nav.php' ?>
  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="">Salir</a>
      </li>
       </ul>
  </div>
</nav>
<div class="jumbotron text-center">
<img class="animated infinite fadeIn" src="img/user.png">

   
</div>

<div class="container">
<div class="row justify-content-between">
<!-- boton para acceder a la prueba en curso -->
<div class="col-lg-4 col-sm-12">
<ul class="list-unstyled list-inline py-2">
  <li class="list-inline-item">
  <button  onclick="location='Prueba_en_curso.php'" type="button"> <img class="animated infinite tada delay-2s" src="img/prueba.png" alt="x" /></button>
  </li>
  <li class="list-inline-item">
  <h5 class="mb-1">Prueba en curso</h5>
  </li>
</ul>
</div>
<!-- boton para acceder al historial de pruebas -->
<div class="col-lg-4 col-sm-12">
<ul class="list-unstyled list-inline py-2">
  <li class="list-inline-item">
  <button onclick="location='historial.php'" type="submit"><img class="animated infinite tada delay-2s" src="img/historial.png" alt="x" /></button>
  </li>
  <li class="list-inline-item">
  <h5 class="mb-1">Historial</h5>
  </li>
</ul>
</div>

</div>
</div>
         
<!-- Footer -->
<footer class="page-footer font-small unique-color-dark pt-4">

  <div class="footer-copyright text-center py-3">© 2019: Ingenieria de Sistemas
    <a href="https://mdbootstrap.com/education/bootstrap/"> InfiltrometroUnicor</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->

</body>
</html>