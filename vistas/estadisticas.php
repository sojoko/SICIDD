<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Azahar Reposteria</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.js"></script>
    
</head>
<body>
<div class="contenedor_boton_volver">           
    <a href="sistema_a.php"> 
        <div class = "boton_volver_panel">
            <p>Volver al panel principal</p>
         </div>
     </a>
</div>

<div class="contenedor-estadisticas">
    <div class="caja_estadistica">    
        <h1>Gráfico de visitas mensuales</h1>
        <canvas id="myChart2" width="400" height="400"></canvas>  
    </div>         
    <div class="caja_estadistica2">
        <?php
            include("../modelo/db.php");
            $visitas1 = $conexion->query("SELECT * FROM visitas");
            $contar = $visitas1->num_rows;  
        ?>
        <script>            
            var ctx= document.getElementById("myChart2").getContext("2d");
            var myChart = new Chart(ctx,{
                type: "bar",
                data:{
                labels:['SEPTIEMBRE','OCTUBRE','NOVIEMBRE'],
                datasets:[{
                label: 'VISITAS / MES',
                data:[<?php echo $contar ?>],                                
                backgroundColor:['rgb(187, 212, 6)']                            
                        }]
                    }
                });
        </script>
    </div>
</div>



</body>
</html>
