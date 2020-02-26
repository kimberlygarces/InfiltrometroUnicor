<?php require 'vista/nav.php' ?>
      <link rel="stylesheet" type="text/css" href="vista/css/historial.css">

          <div class="container">
            <br>

          <h1>Historial de pruebas</h1>
          <br>

          <div class="input-group mb-3">
        <div class="input-group-prepend">
        <label class="input-group-text" for="inputGroupSelect01">           
           <i class="fa fa-search"></i>
          </label>
          </div>
          <input class="form-control" id="myInput" type="text" placeholder="Buscar prueba">
          </div>

          <br>
          <div class="table-responsive">
        <div class="table2" >
          <table class="table  table-striped table-hover">       
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
            "<img src='img/historial.png' width='30' height='30' class='animated tada delay-20s'/>   ".
            $registro["Id_Prueba"].
             "</button>";
             echo '</td>';
             echo '<td>';
             echo "<i class='fa fa-book fa-fw fa-2x' aria-hidden='true' align='left' onclick=location='prueba.php?Id=".$registro['Id_Prueba']."'></i>"; 
               echo '</td>';
              //  echo '<td>';
              //  echo "<botton type='button' class='btn btn-success btn-sm' id='vermas'>"."<i class='' aria-hidden='true' align='left' onclick=location='prueba.php?Id=".$registro['Id_Prueba']."'>ver más</i>"."</button>";
              // echo '</td>';
             echo '</tr>';     
         }
       }
       mysqli_close($conexion);
       ?>
        </tbody>
        </table>
        </div>
      </div>

          <diV>
        <footer class="page-footer font-small unique-color-dark pt-4">

          <div class="footer-copyright text-center py-3">© 2019: Ingenieria de Sistemas
            <a href="https://mdbootstrap.com/education/bootstrap/"> InfiltrometroUnicor</a>
          </div>
          <!-- Copyright -->

        </footer>

        <script>
        $(document).ready(function(){
          $("#myInput").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#myTable tr").filter(function() {
              $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
          });
        });
        </script>

        <!-- Bootstrap core JavaScript -->
        <script src="vendor/jquery/jquery.min.js"></script>
          <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
              </body>
      </html>