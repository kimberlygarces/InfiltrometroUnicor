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
<style>

  
</style>


<div class="inicio">
      <div class="row">
       <div class="col-sm-4 .bg-white">
       <div class="col-sm-12 .bg-white">

       <p><img class="animated fadeIn" src="img/user.png" width="50" height="50" align="left"> 
       <?php echo '<p>'."  ".$user. '</p>';?></p>
        </div>
       <br>
        <div id="btncurso" class="encurso">
        <p>Existe prueba en curso</p>
        
        <div>
       <?php
         
         $sql = "SELECT * FROM datosprueba where N_Dato=1" ;
         $resultado = $conn->query($sql);
         if(empty($resultado)){
         }
         else{
           $i=0;
         while($registro = mysqli_fetch_array($resultado)){
          echo '<button  id="iniciobtn" onclick="location="pruebaencurso.phpp"" class="btn btn-default">';
           echo"<button id='dots' onclick=location='pruebaencurso.php?Id=".$registro['Id_Prueba']."' class='btn'>". 
          "<img src='img/prueba.png' width='30' height='30' class='animated tada delay-20s'/>   ".
          $registro["Id_Prueba"].
          "<i class='fa fa-spinner fa-spin fa-2x fa-fw'  ></i>".
           "</button>";         
         }
       }
       ?>
       </div>
       </div>
      </div>
      <br></br>
      <br></br>
    <br></br>
    <br></br>
           <div class="col-sm-7" >
           <h1>Historial de pruebas</h1>
<br>
         <div class="table-responsive">
        <div class="table2" >
          <table class="table  table-striped table-hover">
          <thead>
          <tr>
          <th ></th>
          <tr>  
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
            echo"<button onclick=location='prueba.php?Id=".$registro['Id_Prueba']."' class='btn'>". 
            "<img src='img/historial.png' width='30' height='30' class='animated tada delay-20s'/>   ".
            $registro["Id_Prueba"].
             "</button>";
             echo '</td>';
             echo '<td>';
           echo "<i class='fa fa-book fa-fw fa-2x' aria-hidden='true' align='left' onclick=location='Prueba_en_curso.php?Id=".$registro['Id_Prueba']."' ></i>";

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