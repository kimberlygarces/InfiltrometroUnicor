<?php
require 'controller/conexion2.php';

session_start();
$user=$_SESSION['usuario'];

if (!isset($_SESSION['usuario'])) {
    header("location:index.php");
}
?>
<?php require 'vista/nav.php' ?>

<link rel="stylesheet" type="text/css" href="vista/css/inicio.css">
<style>
</style>


<div class="inicio container-fluid">
      <div class="row">
       <div class="col-sm-5 .bg-white">
       <div class="animated bounceInLeft delay-20s col-lg-10 col-sm-10 .bg-white">
       <p><img class="animated fadeIn" src="img/user.png" width="50" height="50" align="left"> 
       <?php echo '<p>'."  ".$user. '</p>';?></p>
        </div>
       <br>
        <div>
       <?php
         
         $sql = "SELECT * FROM datosprueba where tiempo=0" ;
         $resultado = $conn->query($sql);
         if(mysqli_num_rows($resultado)>0){

         if(empty($resultado)){
         }
         else{
           $i=0;
         while($registro = mysqli_fetch_array($resultado)){
          echo "<div class='encurso' id='btncurso' class=''>";
          echo"<p>".'Existe prueba en curso'."</p>";
          echo '<button  id="iniciobtn" onclick="location="pruebaencurso.phpp"" class="btn btn-default">';
           echo"<button id='dots' onclick=location='pruebaencurso.php?Id=".$registro['Id_Prueba']."' class='btn'>". 
          "<img src='img/prueba.png' width='30' height='30' class='animated tada delay-20s'/>   ".
          $registro["Id_Prueba"].
          "<i class='fa fa-spinner fa-spin fa-2x fa-fw'  ></i>".
           "</button>";         
           echo "</div>";
         }
       }
      }else{
        // echo "<h1>","En estos momentos no hay prueba en curso","</h1>";
      }
       ?>
       </div>

      </div>
    <br></br>
    <br></br>
    <br></br>
    <br></br>
           <div class="col-sm-6" >
           <?php
               echo "<div class='titulo'>";
               echo "<h1>","Historial de pruebas","</h1>";
              echo "</div>";
               echo "<div class='table-responsive'>";
               echo "<div class='table2' >";
               echo "<table class='table  table-striped table-hover'>";     
               echo "<tbody id='myTable'>";
         $sql = "SELECT * FROM historialdatos where N_Dato=1" ;
         //EJECUTAR LA CONSULTA
         $resultado = $conn->query($sql);
         if(mysqli_num_rows($resultado)>0){

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
             echo "<i class='fa fa-book fa-fw fa-2x' aria-hidden='true' align='left' onclick=location='prueba.php?Id=".$registro['Id_Prueba']."' ></i>";
             echo '</td>';
             echo '</tr>';   
        
         }
       }

       echo "</tbody>";
       echo "</table>";
       echo "</div>";
       echo "</div>  ";
      }else{

        echo "<div class='vacio'>";

        echo "<h1>","Bienvenido","</h1>";
        echo "<br>";
        
        echo "<p>","Desde Inficor podras visializar los datos capturados por tu dispositivo en tiempo real, desde cualquier parte del mundo.","</p>";
        echo "<p>","Además podras ver el historial de pruebas generadas y analizar el grafico respectivo de los datos.","</p>";
        echo "<p>","<b>","Es hora de preparar tu primera prueba de infiltración del agua en el suelo ","<i>"," Suerte!!","</i>","<b>","</p>";

        echo " </div>";


      }

   
       ?>
      

        </div>
        </div>

      </div>

<!-- Footer -->
<footer class="page-footer font-small unique-color-dark pt-4">

  <div class="footer-copyright text-center py-3">© 2019: Ingenieria de Sistemas
    <a href="https://mdbootstrap.com/education/bootstrap/"> InfiltrometroUnicor</a>
  </div>

</footer>

</body>


</html>