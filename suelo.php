<?php require 'vista/nav.php';
require 'controller/conexion2.php';
?>

<link rel="stylesheet" type="text/css" href="vista/css/localizacionsuelo.css">

<!-- Registros adicionales generales de cada prueba-->
<div id="cabecera">
<div class="row">
<div  class="col-sm-6">
<h2>Registro General</h2>
</div>
<!-- ::::::::::::::::::TITULO::::::::::::::::::::::: -->
<div  class="col-sm-6">
<!-- <h1>Prueba en curso</h1> -->
</div>
</div>

</div>

<!-- ::::::::::::::::::DATOS ADICIONALES PRUEBA SUELO Y LOCALIZACIÓN::::::::::::::::::::::: -->

  <div class="row">
 
<div  class="col-sm-6" id="adi">

<form action="controller/suelo.php" method="post" class="form-group">

<h4><i class="fa fa-pagelines" aria-hidden="true"></i>
 Suelo</h4>

<!-- <div id="more2"> -->
      <input class="form-control" type="text" name="TipoSuelo"  placeholder="Tipo de Suelo" >

     <br>
     <input class="form-control" type="text" name="Observaciones2"  placeholder="Observaciones" >
     <br>


    <button  class="btn btn-success"  id="myBtn2">
    <i class="fa fa-database" aria-hidden="true"></i>
    Registrar Suelo</button>  
    <br>

</from>

</div>
<div class="col-sm-6 col-lg-5">
              <br>
              
        <div id="demo" class="carousel slide" data-ride="carousel">

        <!-- Indicators -->
        <ul class="carousel-indicators">
          <li data-target="#demo" data-slide-to="0" class="active"></li>
          <li data-target="#demo" data-slide-to="1"></li>
          <li data-target="#demo" data-slide-to="2"></li>
        </ul>

        <!-- The slideshow -->
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/infiltrometro.jpg" alt="" width="100%" height="400">
          </div>
          <div class="carousel-item">
            <img src="img/cultivo2.jpg" alt="" width="100%" height="400">
          </div>
          <div class="carousel-item">
            <img src="img/infiltrometro2.jpg" alt="" width="100%" height="400">
          </div>
          <div class="carousel-item">
            <img src="img/cultivo.jpeg" alt="" width="100%" height="400">
          </div>

        </div>

        </div>
          
          </div>



  <footer class="page-footer font-small unique-color-dark pt-4">

          <div class="footer-copyright text-center py-3">© 2019: Ingenieria de Sistemas
            <a href="https://mdbootstrap.com/education/bootstrap/"> InfiltrometroUnicor</a>
          </div>

        </footer>


</body>



<script>
        $(document).ready(function(){
          $('[data-toggle="tooltip"]').tooltip();   
        });
        </script>

</html>
