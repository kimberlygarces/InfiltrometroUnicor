<?php require 'vista/nav.php';
require 'controller/conexion2.php';
?>

<link rel="stylesheet" type="text/css" href="vista/css/pruebaencurso.css">

<!-- CODIGO DE LA PRUEBA EN CURSO -->
<div class="container-fluid">
<div id="cabecera" >
<div class="row">
<div  class="col-sm-3">
<?php
         $sql = "SELECT * FROM datosprueba where N_Dato=1" ;
         $resultado = $conn->query($sql);
         if(mysqli_num_rows($resultado)>0){

             if(empty($resultado)){
              }
              else{
                $i=0;

              while($registro = mysqli_fetch_array($resultado)){
                  echo '<h6 id="dots">' .
                  "  <img src='img/prueba.png' width='30' height='30' class='animated tada delay-20s'/>  ".
                    $registro["Id_Prueba"].
                  '</h6>';
                  $idprueba=$registro["Id_Prueba"];
              }
            }
          }else{
            // EN CASO DE QUE NO EXISTA PRUEBA
            echo"<script type=\"text/javascript\">alert('No hay prueba en curso'); window.location='inicio.php';</script>"; 
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
      <!-- <div id="more"> -->
        <div class="row">
        <div  class="col-sm-10">

      <input type="hidden" name="Id" value="<?php echo $idprueba ?>" >

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
      <a class="" href=localizacion.php>
      <i class="fa fa-plus-circle fa-2x" aria-hidden="true"></i></a>

      </div>

        </div>
      
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
      <a class="" href=suelo.php>
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
        <th data-toggle="tooltip" title="Lectura en escala">   l Escala </th>
        <th>  </th>

        </tr>
        </table>
    </thead>
        <div class="table2 text-center">
        <table class="table  table-striped table-hover">

    <tbody id="tbody">
<?php

$sql = "SELECT * FROM datosprueba";
$resultado = $conn->query($sql);
  $ia = 0;
  while ($registro = $resultado->fetch_assoc()) {
    echo '<tr>';
    echo '<td data-toggle="tooltip" title="Número de dato">' . $registro["N_Dato"] . '</td>';
    echo '<td data-toggle="tooltip" title="Tiempo acumulado">' . $registro["tiempo"] . '</td>';
    echo '<td data-toggle="tooltip" title="Lectura en escala">' . $registro["distancia"] . '</td>';
    echo '</tr>';

  }
?>

<!-- PRUEBA -->
<!-- 
<section>
         <div class="table2" >
            <div class="table-responsive text-center">
            <table class="table  table-striped table-hover" id="tablajson">
            <thead>
            <th data-toggle="tooltip" title="Número de dato">N° Dato</th>
            <th data-toggle="tooltip" title="Tiempo acumulado"> Tiempo </th>
            <th data-toggle="tooltip" title="Lectura en escala">   l Escala </th>
          			
                
            </thead>
            <tbody></tbody>
            </table>
      
            <script type="text/javascript">
      
            $(document).ready(function(){
            var url="controller/datos.php";
            $("#tablajson tbody").html("");
            $.getJSON(url,function(prueba){
            $.each(prueba, function(i,prueba){
            var newRow =
            "<tr>"
            +"<td>"+prueba.N_Dato+"</td>"
            // +"<td>"+prueba.Id_Dispositivo+"</td>"
            // +"<td>"+prueba.Id_Prueba+"</td>"
            +"<td>"+prueba.distancia+"</td>"
            +"<td>"+prueba.tiempo+"</td>"
          
            +"</tr>";
            $(newRow).appendTo("#tablajson tbody");
            });
            });
            });
      
            </script>
              </section>    -->

 </tbody>
  </table>
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
</html>
