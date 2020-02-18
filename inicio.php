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
.inicio .col-sm-4 {
  padding: 10px;
  padding-left: 50px;
  border-radius: 5px;
  background-color: #41F308;
  color: #F8F9F9;
  font: italic bold 20px Georgia, Serif;
  margin: 25px;
  height: 70px;
  
  
}

.table .btn{
  font: italic bold 15px Georgia, Serif;

}
.inicio .col-sm-7{
  margin: 15px;

  
}
.menu{
  padding: 10px;
  padding-left: 60px;
  border-radius: 5px;
  background-color: #41F308;
  color: #F8F9F9;
  margin: 15px;

}


.footer-copyright{
  position:fixed;
   left:0px;
   bottom:0px;
   width:100%;
}
    h1{
    margin: 0 auto;
    text-align: center;
    font-weight: 500;
    font-family: "Homer Simpson UI";
    font-size: 40px;
    text-shadow: -1px 1px 0 rgb(28, 43, 29) , -3px 5px 0 #B6FAB9;

    }

</style>

    <div class="inicio">
    <div class="row">
        <div class="col-sm-4 .bg-white">
        <p><img class="animated fadeIn" src="img/user.png" width="50" height="50" align="left"> <?php echo '<p>'."  ".$user. '</p>';?></p>
        </div>

        <!-- TABLA DE HISTORIAL DE PRUEBAS -->

        <div class="col-sm-7 .bg-info">
          <h1>Historial de pruebas</h1>  
          <br>
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
           echo "<i class='fa fa-book fa-fw fa-2x' aria-hidden='true' align='left'></i>";

//           echo"<p>".$registro["Id_Prueba"]."</p>";
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
    
<!-- <div class="container">

<div class="row">
    <div class="col-sm-3" >
    <div class="menu">
    <button  id="iniciobtn" onclick="location='Prueba_en_curso.php'" class="btn btn-default animated tada duration-30s"> 
        <img src="img/prueba.png" width="50" height="50" /> -->
        <!-- <h5 class="mb-1">Prueba en curso</h5> -->
       <!-- </button>
       </div>
       
       <div class="menu">
       
       <button id="iniciobtn" onclick="location='historial.php'" class="btn btn-default animated tada duration-30s">
        <img  src="img/historial.png" width="50" height="50"/> -->
        <!-- <h5 class="mb-1">historial de prueba</h5> -->
        <!-- </button>

    </div>
    <div class="col-sm-5">
   </div>
</div>
</div>
</div>
</div> -->


     
<!-- Footer -->
<footer class="page-footer font-small unique-color-dark pt-4">

  <div class="footer-copyright text-center py-3">© 2019: Ingenieria de Sistemas
    <a href="https://mdbootstrap.com/education/bootstrap/"> InfiltrometroUnicor</a>
  </div>

</footer>

</body>
</html>