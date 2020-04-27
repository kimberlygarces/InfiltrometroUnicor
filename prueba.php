
<!-- <link rel="stylesheet" type="text/css" href="vista/css/historial.css"> -->
<link rel="stylesheet" type="text/css" href="vista/css/prueba.css">

<?php
$idprueba=$_GET['Id'];

if (!isset($_GET['Id'])) {
  header('location:historial.php');
}
require 'vista/nav.php';
require 'controller/conexion2.php';
?>
<div class="container-fluid">

<div id="cabecera">
<div class="row">

<div  class="col-lg-3 col-sm-12">
<?php
echo '<h6 id="pru">'.
            "<img src='img/prueba.png' width='40' height='40' class='animated tada delay-20s'/>  ".
            $idprueba.
            '</h6>'
 ?>

</div>
<!-- ::::::::::::::::::TITULO::::::::::::::::::::::: -->
<div  class="col-lg-9 col-sm-12">
<h2>Informe general</h2> 
</div>
</div>
</div>
<div class="row"> 
 <div  class="col-lg-3 col-sm-3 " id="adi">
<!-- VER DATOS ADICIONALES DE LA PRUEBA -->
    <div>

    <?php

    // datos de la adicionales ya registrados
            $sql2 = "SELECT * FROM prueba WHERE Id = '" . $_GET["Id"] . "'";

            $resultado2 = $conn->query($sql2) or die ("Algo ha ido mal en la consulta a la base de datos");
            $i = 0;
            if(mysqli_num_rows($resultado2)>0){

            while ($registro2 = $resultado2->fetch_assoc()) {
              echo "<div class='detalle'>";
              echo "<p>"."<i class='fa fa-map-marker' aria-hidden='true'></i> " . "LOCALIZACIÓN:" ."</p>";
              echo '<p>'. $registro2["localizacion"] . '</p>';
              echo "</div>";
              echo "<div class='detalle'>";
              echo "<p>"."<i class='fa fa-pagelines' aria-hidden='true'></i> " . "TIPO DE SUELO:" ."</p>";
              echo '<p>'. $registro2["suelo"] . '</p>';
              echo "</div>";
              echo "<div class='detalle'>";
              echo "<p>"."<i class='fa fa-eye' aria-hidden='true'></i> " . "OBSERVACIONES:" ."</p>";
              echo '<p>' . $registro2["Observaciones"] . '</p>';
              echo "</div>";
          }

        }else{
          // registro de los datos adicionales de la prueba en caso de no estar registrada
          echo "<form action='controller/pruebatotal.php' method='post' class='form-group'>";
          // codigo de la prueba oculto
           echo "<input type='hidden' name='Id' value='$idprueba' >";
            // seleccion de los la localización ya registradas
          echo "<div class='row'>";
          echo "<div  class='col-lg-12'>";
      
          echo "<div class='input-group mb-3'>";
          echo "<div class='input-group-prepend'>";
          echo "<label class='input-group-text' for='inputGroupSelect01'>";       
          echo "<i class='fa fa-map-marker' aria-hidden='true'></i>";
          echo "</label>";
          echo "</div>";
           echo "<select class='form-control' id='exampleFormControlSelect1' name='Ciudad' >";
           echo "<option value='0' selected>" ."Elija una Ciudad". "</option>";

         
                $sql = "SELECT * FROM localizacion " ;
                $resultado = $conn->query($sql);
                if(empty($resultado)){
                }
                else{
                  $i=0;
                while($registro = mysqli_fetch_array($resultado)){
                  
                  echo '<option value="'.$registro['ciudad'].'">'.$registro['ciudad'].'</option>';
                }
              }
            
        echo "</select>";
        echo "<div class='input-group-prepend'>";
        echo "<label class='input-group-text' for='inputGroupSelect01'>";       
        echo "<a data-toggle='tooltip' title='Ingresa una nueva localidad' href=localizacion.php>"."
        <i class='fa fa-plus-circle' aria-hidden='true'></i>"."</a>";
        echo "</label>";
        echo "</div>";

          echo "</div>";
          echo "</div>";
          
          echo "</div>";

          // ingresar el tipo de suelo de la prueba 
          echo "<div class='row'>";
          echo "<div  class='col-lg-12' id='suelo'>";
        
          echo "<div class='input-group mb-3'>";
          echo "<div class='input-group-prepend'>";
          echo "<label class='input-group-text' for='inputGroupSelect01'>";       
          echo "<i class='fa fa-pagelines' aria-hidden='true'></i>";
          echo "</label>";
          echo "</div>";

          echo "<select class='form-control' id='exampleFormControlSelect1' name='TipoSuelo' >";
          echo "<option value='0' selected>" ."Elija el tipo de suelo". "</option>";

        
              $sql = "SELECT * FROM suelo" ;
              $resultado = $conn->query($sql);
              if(empty($resultado)){
              }
              else{
                $i=0;
              while($registro = mysqli_fetch_array($resultado)){
                
                echo '<option value="'.$registro['TipoSuelo'].'">'.$registro['TipoSuelo'].'</option>';
          }
     }
   
       echo "</select>";
       echo "<div class='input-group-prepend'>";
       echo "<label class='input-group-text' for='inputGroupSelect01'>";       
       echo "<a  data-toggle='tooltip' title='Ingresa un nuevo tipo de suelo' href=suelo.php>"."
       <i class='fa fa-plus-circle' aria-hidden='true'></i>"."</a>";
       echo "</label>";
       echo "</div>";
         echo "</div>";
         echo "</div>";

        
         echo "</div>";

        //  INGRESAR LAS OBSERVACIONES DE LA PRUEBA
         echo "<div class='form-group'>";
        echo "<textarea class='form-control' name='Observaciones' id='exampleFormControlTextarea1' rows='3' placeholder='Observaciones generales de la prueba en curso'>";
        echo"</textarea>";
       echo"</div>";  

       // BOTON DE GUARDAR DATOS DE LA PRUEBA

       echo "<div class='row'>";
       echo "<div  class='col-sm-10'>";
       echo "<button  class='btn btn-ligh'  id='btnregistro'>
            <i class='fa fa-database' aria-hidden='true'></i>
            Registrar datos </button>";  
       echo"</div>"; 
       echo"</div>";  
       
               echo "</from>";

        }

          ?>
 

    <br>
    <!-- BOTONES PARA DESCARGAR PDF, ECXEL Y GRAFICA -->
    <div class="botonesdoc">
      <a href="controller/printPDF.php?prueba=<?php echo $_GET['Id']; ?>" target="_blank">
    <button id="btonDoc" type="button" class="btn btn-danger">
      <i data-toggle="tooltip" title="Generar documento PDF"class="fa fa-file-pdf-o fa-2x"> </i>
      </button></a>
       <a href="controller/excel.php?prueba=<?php echo $_GET['Id']; ?>" target="_blank">
    <button id="btonDoc" type="button" class="btn btn-success">
    <i data-toggle="tooltip" title="Generar archivo Excel"class="fa fa-file-excel-o fa-2x" ></i>
      </button></a>
      <a href="graficos.php?Id=<?php echo $_GET['Id']; ?>" target="_blank">
    <button id="btonDoc" type="button" class="btn btn-warning">
    <i data-toggle="tooltip" title="Generar gráfica de datos" class="fa fa-line-chart fa-2x" ></i>
      </button></a>
      </div>
      </div>
      </div>

    <div class="col-sm-9">
    <div class="col-sm-11">
    <div class="input-group mb-3">
        <div class="input-group-prepend">
        <label class="input-group-text" for="inputGroupSelect01">           
           <i class="fa fa-search"></i>
          </label>
          </div>
          <input class="form-control" id="myInput" type="text" placeholder="Buscar dato especifico de la prueba">
          </div>
          </div>
    <div class="table-responsive">
      <table class="table table-striped  text-center">
      <thead>
          <!-- <th>PRUEBA</th> -->
          <th data-toggle="tooltip" title="Número de dato">N° Dato</th>
          <th data-toggle="tooltip" title="Tiempo acumulado"> Tiempo </th>
          <th data-toggle="tooltip" title="Lectura en escala"> l Escala </th>
          <th data-toggle="tooltip" title="Infiltración parcial"> I Parcial (mm) </th>
          <th data-toggle="tooltip" title="Infiltración acumulada"> IA (mm) </th>
        
        </thead>
        </table>

        <div class="table2" >
      <table class="table table-striped  text-center">
      <tbody id="myTable">
       
          <?php
          if (!empty($_GET["Id"])) {
            //1.contectarse al servidor mysql 
            if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
            }
            //2.prepara una consulta sql
            $sql = "SELECT * FROM historialdatos WHERE Id_Prueba = '" . $_GET["Id"] . "'";
            //3.ejecutar la consulta
            $resultado = $conn->query($sql);
            echo '<tr><td colspan="5"></td></tr>';
            $aux = null;
            $ia = 0;
            while ($registro = $resultado->fetch_assoc()) {
              echo '<tr>';
              // echo '<td>' . $registro["Id_Prueba"] . '</td>';
              echo '<td data-toggle="tooltip" title="Número de dato">' . $registro["N_Dato"] . '</td>';
              echo '<td data-toggle="tooltip" title="Tiempo acumulado">' . $registro["tiempo"] . '</td>';
              echo '<td data-toggle="tooltip" title="Lectura en escala">' . $registro["distancia"] . '</td>';

              if ($aux == null) {
                echo '<td>-</td>';
              } else {
                echo '<td data-toggle="tooltip" title="Infiltración parcial">' . (($aux - $registro['distancia']) * 10) . '</td>';
              }
              if ($aux == null) {
                echo '<td>-</td>';
              } else {
                $ia = $ia + ($aux - $registro['distancia']);
                echo '<td data-toggle="tooltip" title="Infiltración acumulada">' . ($ia * 10) . '</td>';
              }
              $aux = $registro['distancia'];

              echo '</tr>';
            }
          }
          $conn->close();
          ?>
        </tbody>
      </table>
      </div>
    </div>
    </div>
    </div>
    </div>
           
    </div>
    
  </div>
   <footer class="page-footer font-small unique-color-dark pt-4">

          <div class="footer-copyright text-center py-3">© 2019: Ingenieria de Sistemas
            <a href="https://mdbootstrap.com/education/bootstrap/"> InfiltrometroUnicor</a>
          </div>
          <!-- Copyright -->

        </footer>

        <script>
        $(document).ready(function(){
          $('[data-toggle="tooltip"]').tooltip();   
        });
        </script>

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
         

<script>
function myFunction() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");
  var btnText2 = document.getElementById("myBtn2");



  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Localización"; 
    moreText.style.display = "none";
    btnText2.style.display = "inline";

  } else {
    dots.style.display = "none";
    btnText2.style.display = "none";
    btnText.innerHTML = "cerrar"; 
    moreText.style.display = "inline";
  }

}
  function myFunction2() {
    var dots = document.getElementById("dots");
  var moreText = document.getElementById("more2");
  var btnText = document.getElementById("myBtn2");
  var btnText2 = document.getElementById("myBtn");


  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Tipo de suelo"; 
    moreText.style.display = "none";
    btnText2.style.display = "inline";

  } else {
    dots.style.display = "none";
    btnText.innerHTML = "cerrar"; 
    moreText.style.display = "inline";
    btnText2.style.display = "none";

  }

  
}
</script>
  </body>

  </html>