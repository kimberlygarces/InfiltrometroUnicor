<?php
require 'controller/conexion2.php';

session_start();
$user=$_SESSION['usuario'];

if (!isset($_SESSION['usuario'])) {
    header("location:index.php");
}


?>
<?php require 'vista/nav.php' ?>

<link rel="stylesheet" type="text/css" href="vista/css/pagina.css">

<div class="jumbotron text-center">      
<img class="animated fadeIn" src="img/user.png">
</div>
<br>
<div class="container">

<?php echo '<h6>'."Bienvenido ".$user. '</h6>';
?>
<div class="row justify-content-between">
<!-- boton para acceder a la prueba en curso -->
<div class="col-lg-4 col-sm-12">
<ul class="list-unstyled list-inline py-2">
  <li class="list-inline-item">
  <button  id="iniciobtn" onclick="location='Prueba_en_curso.php'" class="btn btn-default animated tada duration-30s"> 
  <img src="img/prueba.png" alt="x" />
  <h5 class="mb-1">Prueba en curso</h5>
  </button>
  </li>
  <li class="list-inline-item">
  </li>
</ul>
</div>
<!-- boton para acceder al historial de pruebas -->
<div class="col-lg-4 col-sm-12">
<ul class="list-unstyled list-inline py-2">
  <li class="list-inline-item">
  <button id="iniciobtn" onclick="location='historial.php'" class="btn btn-default animated tada duration-30s">
  <img src="img/historial.png" alt="x" />
  <h5 class="mb-1">Historial</h5>

  </button>
  </li>
  <li class="list-inline-item">
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