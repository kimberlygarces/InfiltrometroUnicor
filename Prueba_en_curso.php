<?php require 'vista/nav.php';
require 'controller/conexion2.php';
?>

<link rel="stylesheet" type="text/css" href="vista/css/prueba.css">


<div class="container">
<br>
<div class="container">
  <!-- <p>Datos cacturados</p>    -->
  <!-- Button to Open the Modal -->
  <!-- <button type="button" class="btn btn-outline-dark" data-toggle="modal" data-target="#myModal">
    Registrar Prueba
  </button> -->

  <!-- The Modal -->
  <!-- <div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content"> -->
      
        <!-- Modal Header -->
        <!-- <div class="modal-header">
          <h4 class="modal-title">Registro Prueba</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
         -->
        <!-- Modal body -->
        <!-- <div class="modal-body"> -->

<!--         
        <form action="controller/localizacion.php" method="post" class="form-group">
        <div class="row">
       <div class="col">
             <h4>Localización</h4>
            <label>Ciudad</label>
            <input class="form-control" type="text" name="Ciudad">
            <label>Coordenadas</label>
            <input class="form-control" type="text" name="Coordenadas">
            <label>Observaciones</label>
            <input class="form-control" type="textArea" name="Observaciones">
              <br>
                </div>
        <div class="col">
            <h4>Suelo</h4>
            <label>TipoSuelo</label>            
            <input class="form-control" type="text" name="TipoSuelo">
            <label>Observaciones</label>
            <input class="form-control" type="text" name="Observaciones2">
              <br>
              </div>
        </div>
               
        </div> -->
        
        <!-- Modal footer
        <div class="modal-footer">


       </from>

   
       <input type="submit" class="btn btn-primary" value="Agregar">     -->
          
          <!-- <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>

        </div>
        
      </div>
    </div>
  </div>
  
</div> -->

  <div class="row">
       <div class="col-sm-8">
       <!-- <div class="spinner-border text-success"></div> -->

       <h1>Prueba en curso</h1>
       <br>

       <div class="table-responsive">
        <div class="table2 text-center">
  <table class="table table-striped"  id="datos">
    <thead>
      <tr>
      <th data-toggle="tooltip" title="Número de dato">N° Dato</th>
      <th data-toggle="tooltip" title="Tiempo acumulado"> Tiempo </th>
      <th data-toggle="tooltip" title="Lectura en escala"> l Escala </th>
      </tr>
    </thead>
    <tbody id="tbody">
          <!-- DATOS EN TIEMPO REAL-->
    </tbody>
  </table>
  </div>
  </div>
  </div>

  <div class="col-sm-4">

  <br><br><br>

  <div class="detalle text-center">
      <p> 
     
     <?php
        //  $conexion = mysqli_connect("localhost","root","","infiltrometro") or die("ERROR: ".mysqli_error($conexion));
         
         $sql = "SELECT * FROM datosprueba where N_Dato=1" ;
         $resultado = $conn->query($sql);
        //  $resultado = mysqli_query($conexion, $sql) or die("ERROR: ".mysqli_error($conexion));
         if(empty($resultado)){
         }
         else{
           $i=0;
         while($registro = mysqli_fetch_array($resultado)){
         
          echo '<h4 id="dots">'.'DETALLE DE LA PRUEBA N°  '.$registro["Id_Prueba"].'</h4>';

          //  echo"<button onclick=location='localizacion.php?Id=$registro[Id_Prueba]' class='btn btn-primary'>".'AGREGAR'."</button>";

         }
       }
       ?>
      <!-- <form action="controller/localizacion.php" method="post" class="form-group"> -->


      <div id="more">
      <h4>Localización</h4>

            <input class="form-control" type="text" name="Ciudad"  placeholder="Ciudad" >
            <br>
            <input class="form-control" type="text" name="Coordenadas"  placeholder="Cooerdenadas" >
           <br>
            <input class="form-control" type="textArea" name="Observaciones"  placeholder="Observaciones" >

      </div>
      </p>
      <button  class="btn btn-success" onclick="myFunction()" id="myBtn">
      <i class="fa fa-map-marker" aria-hidden="true"></i>
      Localización</button>

      <div id="more2">
      <h4>Suelo</h4>
            <input class="form-control" type="text" name="TipoSuelo"  placeholder="Tipo de Suelo" >
            <br>
            <input class="form-control" type="text" name="Observaciones"  placeholder="Observaciones" >
            <br>

      </div>
      </p>
      <button  class="btn btn-success" onclick="myFunction2()" id="myBtn2">
      <i class="fa fa-circle" aria-hidden="true"></i>
      Tipo de suelo</button>   

      <br>
      <!-- </from> -->
      <br>
      <button onclick="location='controller/historial.php'" type="button" class="btn btn-danger">
        Finalizar Prueba
        </button>
      
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

<script>

  $(document).ready(function(){
    //Cada 10 segundos (10000 milisegundos) se ejecutará la función refrescar
    setTimeout(refrescar, 30000);
  });
  function refrescar(){
    //Actualiza la página
    location.reload();
  }
</script>

<script>
        $(document).ready(function(){
          $('[data-toggle="tooltip"]').tooltip();   
        });
        </script>

<script>
function myFunction() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");
  var btnText2 = document.getElementById("myBtn2");
  var btndatos = document.getElementById("datos");




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
</html>
