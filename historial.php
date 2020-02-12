<?php require 'vista/nav.php' ?>
      <link rel="stylesheet" type="text/css" href="vista/css/historial.css">

          <div class="container">
          <br>
          <h1 class='animated bounce delay-20s'>Historial de pruebas</h1>
        
          <div id="Mostrar"class="row align-items-start">
            <div class="col-sm-6 col-lg-4">
            <br>
          
            <table class="table table-striped">
              
          <tbody id="myTable">

         <?php
           //Conectarse al servidor mysql
         $conexion = mysqli_connect("localhost","root","","infiltrometro") or die("ERROR: ".mysqli_error($conexion));
           
         $sql = "SELECT * FROM historialdatos where N_Dato=1" ;
           //EJECUTAR LA CONSULTA
         $resultado = mysqli_query($conexion, $sql) or die("ERROR: ".mysqli_error($conexion));
         if(empty($resultado)){
           echo '<tr><td colspan="4"></td></tr>';
         }
         else{
           $i=0;
         while($registro = mysqli_fetch_array($resultado)){
           echo '<tr>';
             echo '<td>';
             
            echo"<button onclick=location='prueba.php?Id=".$registro['Id_Prueba']."' class='btn'>". 
            "<img src='img/historial.png' width='50' height='60' class='animated tada delay-20s'/>   ".
            // "<i class='fa fa-book fa-fw fa-3x' aria-hidden='true'></i>". 
            $registro["Id_Prueba"]." 
             <i class='fa fa-eye fa-2x animated tada delay-20s' aria-hidden='true' ></i>  ". "</button>";
 
             echo '</td>';
             echo '<td>';
             
//             echo"<p>".$registro["Id_Prueba"]."</p>";
             
             echo '</td>';
               echo '</tr>';
               
         }
       }
       mysqli_close($conexion);
       ?>
           
      

        </tbody>
        </table>


        </div>
              <div class="col-sm-6 col-lg-7">
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

        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
          <span class="carousel-control-next-icon"></span>
        </a>
        </div>

              </div>
        </div>
        <footer class="page-footer font-small unique-color-dark pt-4">

          <div class="footer-copyright text-center py-3">© 2019: Ingenieria de Sistemas
            <a href="https://mdbootstrap.com/education/bootstrap/"> InfiltrometroUnicor</a>
          </div>
          <!-- Copyright -->

        </footer>
      </body>
      </html>