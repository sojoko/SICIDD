<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Azahar Reposteria</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.js"></script>
    
</head>
<body>
    <div class="caja_estadistica">
   
        <h1>Grafico de visitas mensuales</h1>
        <canvas id="myChart2" width="400" height="400"></canvas>  
    </div> 
    
</body>
   
    <script>
        var ctx= document.getElementById("myChart").getContext("2d");
        var myChart = new Chart(ctx,{
            type: "bar",
            data:{
                labels:['enero', 'febrero', 'marzo','abril','mayo','junio'],
                datasets:[{
                    label: 'visitas/mes',
                    data:[705,934,1513,543,666,234],
                    backgroundColor:[
                        'rgb(187, 212, 6)'

                    ]
                }]
            }
        });
    </script>
<?php

   include("db.php");
   $visitas1 = $conexion->query("SELECT * FROM visitas");
   $contar = $visitas1->num_rows;
  
?>
<script>
    
        var ctx= document.getElementById("myChart2").getContext("2d");
        var myChart = new Chart(ctx,{
            type: "bar",
            data:{
                labels:['AGOSTO'],
                datasets:[{
                    label: 'VISITAS / MES',
                    data:                                  
                    [<?php echo $contar ?>],
                    backgroundColor:[
                        'rgb(187, 212, 6)'

                    ]
                }]
            }
        });
    </script>

</html>
