<?php 
    require("../controlador/plantillas/header.php")
 ?>
<h1 class="title1">CAKES</h1>
<div class="container3">
    <?php
        include("../modelo/db.php");
        $query1 = "SELECT * FROM productos_enteros WHERE tipoProducto = '1' ";
        $resultado1 = $conexion->query($query1);
        while($row1 = $resultado1->fetch_assoc()){

    
    ?>

        <div class="card3">
            <img src="data:image/jpeg;base64, <?php echo base64_encode($row1['img']);?>">
            <h4><?php echo $row1['nombre']; ?></h4>
            <h5>Precio: <?php echo $row1['precio']; ?></h5>
            <!--<p>Tortas o Pasteles de increibles estilos y deliciosos sabores</p> -->
            <a href="https://wa.me/+573204619680?text= Hola, me gustaria comprar <?php echo $row1['nombre']; ?> ">COMPRAR</a>
        </div>     
      
    <?php } ?> 
        
</div>     

<?php 
    require("../controlador/plantillas/footer.php")
 ?>