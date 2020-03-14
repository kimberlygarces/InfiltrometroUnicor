 <style>

   </style>
<link rel="shortcut icon" href="img/user.png" />
<link rel="stylesheet" type="text/css" href="vista/css/index.css">
<body>
<?php require 'vista/navptal.php' ?>
<!-- ::::::::::::::::::::::::::::::::::::CAROUSEL ::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->
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
  <img id="fondo"src="img/cultivo.jpeg" alt="" width="100%" height="100%">
  <div class="row" id="imgone">
  <div class="col-sm-12 col-lg-8">
          <div class="carousel-caption">
            <img class="animated  fadeIn" src="img/user.png">
            <br>
            <p>Visualización de los datos en tiempo real durante el proceso de Infiltración del agua en el suelo</p>
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">
              Ingresar
            </button>      
            </div>
          </div>
        </div>
  </div>

  <div class="carousel-item">
  <img id="fondo"src="img/cultivo2.jpg" alt="" width="100%" height="100%">
  <div class="row" id="imgtwo" >
  <div class="col-sm-12 col-lg-5">
  </div>
  <div class="col-sm-12 col-lg-6">
          <div class="carousel-caption">
          <div align="left">
          <img class="animated  fadeIn" src="img/unicor_opt.png">
          Universidad de Córdoba 
          </div> 
          <div align="right">
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">
              Ingresar
            </button>   
            </div>    
            </div>
          </div>
        </div>
     </div>

  <div class="carousel-item">
  <img id="fondo"src="img/paisaje.jpg" alt="" width="100%" height="100%">
  <div class="row" id="imgthree" >
  <div class="col-sm-12 col-lg-6">
  </div>
  <div class="col-sm-12 col-lg-5">
          <div class="carousel-caption">
          <div align="left">
          <!-- <img class="animated  fadeIn" src="img/user.png"> -->
        <h1>Inficor</h1>
        El Dispositivo electrocico permite captura de datos, durante el proceso de Infiltración del agua en el suelo.
        </div> 
          <div align="right">
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">
              Ingresar
            </button>   
            </div>    
            </div>
          </div>
        </div>
     </div>
    




  </div>
</div>

<!-- Left and right controls -->
<a class="carousel-control-prev" href="#demo" data-slide="prev">
  <span class="carousel-control-prev-icon"></span>
</a>
<a class="carousel-control-next" href="#demo" data-slide="next">
  <span class="carousel-control-next-icon"></span>
</a>
</div>
<!-- ::::::::::::::::::::::::::::::::::MODAl::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->
<div class="modal fade" id="myModal">
<div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h3 class="modal-title text-center">Inficor</h3>
          <button type="button" class="close"  data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
  
        <div class="container text-center">
            <img class="animated  fadeIn" src="img/user.png">
            <br>
            <br>
            <form class="form-signin" action="loginusuarioverificar.php" method="POST">
                <label for="inputEmail" class="sr-only">Usuario</label>
                <input type="email" id="correo" name="correo" class="form-control" placeholder="Usuario" required autofocus>
                <br>                    
                <label for="inputPassword" class="sr-only">Contraseña</label>
                <input type="password" id="password" name="pass" class="form-control" placeholder="Contraseña" required>
                <br>
                <button class="btn btn-secondary btn-block" type="submit">Inciar sesión</button>
                  
            </form>
            </div>      
            </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  <!-- ::::::::::::::::::::::::::::::Container - contenido informativo ::::::::::::::::::::::::::::::::::::::::::::::::::-->

  

  <div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <br>
    <div class="row">
      <div class="col-lg-4">
      <img class="bd-placeholder-img rounded-circle" src="img/infiltrometro.jpg" width="140" height="140" title="Infiltrometro" focusable="false">
       
        <h2>Heading</h2>
        <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
        <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p> 
      </div>
      
      <!-- /.col-lg-4 -->
      <div class="col-lg-4">
      <img class="bd-placeholder-img rounded-circle" src="img/cultivo2.jpg" width="140" height="140" title="Infiltrometro" focusable="false">
       
        <h2>Heading</h2>
        <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
        <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p> 
      </div>

      <div class="col-lg-4">
      <img class="bd-placeholder-img rounded-circle" src="img/infiltrometro2.jpg" width="140" height="140" title="Infiltrometro" focusable="false">
       
       <h2>Heading</h2>
       <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
       <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p> 
     </div>
           </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->


    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It’ll blow your mind.</span></h2>
        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
      </div>
      <div class="col-md-5">
      <img src="img/cultivo.jpeg" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 500x500">
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">Oh yeah, it’s that good. <span class="text-muted">See for yourself.</span></h2>
        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
      </div>
      <div class="col-md-5 order-md-1">
      <img src="img/cultivo.jpeg" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 500x500">
      
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
      </div>
      <div class="col-md-5">
      <img src="img/cultivo.jpeg" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 500x500">
      </div>
    </div>

    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->

<!-- Footer -->
<footer class="page-footer font-small unique-color-dark pt-4">

  <!-- Footer Elements -->
  <div class="container">

    <!-- Call to action -->
    <ul class="list-unstyled list-inline text-center py-2">
      <li class="list-inline-item">
        <h5 class="mb-1">Nuevo Usuario</h5>
      </li>
      <li class="list-inline-item">
        <button  onclick="location='registro.php'" type="button" class="btn btn-outline-dark">Registrar</button>
      </li>
    </ul>

  </div>

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2019: Ingenieria de Sistemas
    <a href="https://mdbootstrap.com/education/bootstrap/"> InfiltrometroUnicor</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->



</body>
</html>