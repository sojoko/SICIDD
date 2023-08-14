<?php 
    include('db.php');	    
    
    $query = "SELECT * FROM productos_enteros";
    $consulta_1 = mysqli_query($conexion,$query);

?>