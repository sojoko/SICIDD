
<?php
include ("modelo/db.php");
    date_default_timezone_set("America/Bogota");

    $conexion=mysqli_connect("localhost","root","","sicidd");
    $ip = $_SERVER['REMOTE_ADDR'];
    
    $sqlConsultar = $conexion->query("SELECT * FROM visitas WHERE ip = '$ip' ORDER BY id desc");
    $contarConsltar = $sqlConsultar->num_rows;
   

    if($contarConsltar == 0){
        $sqlInsertar = $conexion->query("INSERT INTO visitas (ip,fecha) VALUES ('$ip',now())");
    }else{
       $row = $sqlConsultar->fetch_array();
       $fechaRegistro = $row['fecha'];
       $fechaActual = date("Y-m-d H:i:s");
       $nuevaFecha = strtotime($fechaRegistro."+ 1 minute" );
       $nuevaFecha = date("Y-m-d H:i:s",$nuevaFecha);
       

       if($fechaActual >= $nuevaFecha){
          $sqlInsertar = $conexion->query("INSERT INTO visitas (ip,fecha) VALUES ('$ip',now())");
       }else{
        
       }
    }

    $visitas1 = $conexion->query("SELECT * FROM visitas");
    $contar = $visitas1->num_rows;   


    header("location: vistas/index.php")
    ?>
