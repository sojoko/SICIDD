<?php 
    require("../controlador/plantillas/header.php")
 ?>

    <h1 class="h1f">INGRESE LOS DATOS</h1>
   
    <div class="form1">

        <form action="../controlador/registro_producto.php" method="post" enctype="multipart/form-data">
          
            <input type="text" placeholder="nombre del producto" name="nombre">
            <input type="text" placeholder="precio del producto" name="precio">
            <p>imagen del producto</p> <input type="file" placeholder="imagen" name="img">
            <select name="tipoProducto" class="select">
                <option value="1">Cake</option>
                <option value="2">Cheesecake</option>
                <option value="3">Cupcake</option>
            </select>                     
            <input type="submit" value="Enviar">           
        </form>
    </div>

<?php 
    require("../controlador/plantillas/footer.php")
 ?>