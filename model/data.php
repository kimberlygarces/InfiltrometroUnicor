<?php
require_once "prueba.php";
//1.contectarse al servidor mysql
		$conexion = mysqli_connect("localhost", "root", "") or die("ERROR: ".mysqli_error());
		mysqli_select_db($conexion,"infiltrometro") or die("Error conectandose a la BD ");
        
        class Data{
            private $con;
            public function __construct(){
                $conexion = mysqli_connect("localhost","root","","infiltrometro") or die("ERROR: ".mysqli_error($conexion));
            }
            public function getPrueba(){
    
                $prueba = array();
                $conexion = mysqli_connect("localhost","root","","infiltrometro") or die("ERROR: ".mysqli_error($conexion));
                $sql = "SELECT * FROM datosprueba";
                //EJECUTAR LA CONSULTA
              $res = mysqli_query($conexion, $sql) or die("ERROR: ".mysqli_error($conexion));
                while($reg = mysqli_fetch_array($res)){
                    $p = new datosprueba();
                    $p->N_Dato = $reg[0];
                    $p->Id_Prueba = $reg[1];
                    $p->tiempo = $reg[2];
                    $p->distancia = $reg[3];
                 //   $p->Clase = $reg[3];
                   // $p->Precio = $reg[5];
                    //$p->Cantidad = $reg[6];
                    //$p->Oferta = $reg[7];
                    array_push($prueba, $p);
                }
                return $prueba;
            }
        }
?>