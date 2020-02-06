<?php require 'vista/nav.php' ?>


    <div class="container">

  
      <div id="Mostrar"class="row align-items-start">

      <div class="col-sm-12 col-lg-6">
        <h1>Historial de pruebas</h1>
     
      <table class="table table-striped">

      <thead>
          <th>PRUEBA</th>
          <th>  </th>
          </thead>
          
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
             
            echo"<button onclick=location='prueba.php?Id=".$registro['Id_Prueba']."' class='btn btn-primary'>".$registro["Id_Prueba"]."</button>";
 
             echo '</td>';
             echo '<td>';
             
             echo"<p>".$registro["Id_Prueba"]."</p>";
             
             echo '</td>';
               echo '</tr>';
               
         }
       }
       mysqli_close($conexion);
       ?>
           
      

        </tbody>
        </table>


        </div>
        </div>
      </body>
      </html>