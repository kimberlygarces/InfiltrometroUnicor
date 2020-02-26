<?php require 'vista/nav.php';
require 'controller/conexion2.php';
?>

<link rel="stylesheet" type="text/css" href="vista/css/prueba.css">

<!-- CODIGO DE LA PRUEBA EN CURSO -->
<div id="cabecera">
<div class="row">
<div  class="col-sm-3">
<?php
         $sql = "SELECT * FROM datosprueba where N_Dato=1" ;
         $resultado = $conn->query($sql);
         if(empty($resultado)){
         }
         else{
           $i=0;
         while($registro = mysqli_fetch_array($resultado)){
            echo '<h6 id="dots">'.
            "<img src='img/prueba.png' width='30' height='30' class='animated tada delay-20s'/>  ".
            $registro["Id_Prueba"].
          //  "<i class='fa fa-clock-o' aria-hidden='true'></i>".

            // "<i class='fa fa-spinner fa-spin fa-2x fa-fw'  ></i>".
            '</h6>';
         }
       }
       ?>
</div>
<!-- ::::::::::::::::::TITULO::::::::::::::::::::::: -->
<div  class="col-sm-9">
<h1>Prueba en curso</h1>
</div>
</div>
</div>

<!-- ::::::::::::::::::DATOS ADICIONALES PRUEBA SUELO Y LOCALIZACIÓN::::::::::::::::::::::: -->

  <div class="row">
 
  <div  class="col-sm-3" id="adi">
  <form action="controller/pruebatotal.php" method="post" class="form-group">

  <h4><i class="fa fa-map-marker" aria-hidden="true"></i>
    Localización</h4>

      <!-- <div id="more"> -->
        <div class="row">
        <div  class="col-sm-10">
        <div class="form-group">
            <select class="form-control" id="exampleFormControlSelect1" name="Ciudad" >
            <option value="0" selected>Elija una Ciudad</option>

          <?php
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
       ?>
          </select>
            
          </div>
      </div>
      <div  class="col-sm-2">
      <a class="" href=localizacionsuelo.php>
      <i class="fa fa-plus-circle fa-2x" aria-hidden="true"></i></a>

      </div>

        </div>
        <h4><i class="fa fa-pagelines" aria-hidden="true"></i>
        Suelo</h4>
        <div class="row">
        <div  class="col-sm-10">
        <div class="form-group">
            <select class="form-control" id="exampleFormControlSelect1" name="TipoSuelo" >
            <option value="0" selected>Elija un tipo de suelo</option>

          <?php
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
       ?>
          </select>
        </div>
      </div>
      <div  class="col-sm-2">
      <a class="" href=localizacionsuelo.php>
      <i class="fa fa-plus-circle fa-2x" aria-hidden="true"></i></a>

      </div>
        </div>
          <div class="form-group">
          <textarea class="form-control" name="Observaciones" id="exampleFormControlTextarea1" rows="3" placeholder="Observaciones generales de la prueba en curso"></textarea>
        </div>
            
            <br>

                <button  class="btn btn-primary"  id="myBtn2">
                <i class="fa fa-database" aria-hidden="true"></i>
                Registrar caracterización</button>  
                <br>

</from>
         <br>         
      <button onclick="location='controller/historial.php'" type="button" class="btn btn-danger">
        Finalizar Prueba
        </button>
</div>
<!--::::::::::::::::::::::::::::::::::::::::::::::::. TABLA CON LOS DATOS EN CURSO:::::::::::::::::::::::::::::::::::::::::::::: -->
<div class="col-sm-9">
       <br>
       <div class="table-responsive text-center">
       <table class="table  table-striped table-hover" id="datos">
        <thead>
        <tr>
        <th data-toggle="tooltip" title="Número de dato">N° Dato</th>
        <th data-toggle="tooltip" title="Tiempo acumulado"> Tiempo </th>
        <th data-toggle="tooltip" title="Lectura en escala"> l Escala </th>
        <th>  </th>

        </tr>
        </table>
    </thead>
        <div class="table2 text-center">
        <table class="table  table-striped table-hover">

    <tbody id="tbody">
          <!-- DATOS EN TIEMPO REAL-->
    </tbody>
  </table>
  </div>
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
