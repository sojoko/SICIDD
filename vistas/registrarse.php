<?php 
    require("../controlador/plantillas/header.php")
 ?>

    <h1 class="h1f">INGRESE SUS DATOS</h1>
   
    <div class="form1">

        <form action="../controlador/registro.php" method="post">
          
            <input type="text" placeholder="Nombre" name="nombre">
            <input type="text" placeholder="Apellido" name="apellido">
            <input type="text" placeholder="Correo" name="correo">
            <input type="text" placeholder="Telefono" name="telefono" data-title="si es un telefono fijo, por favor ingresa el prefijo 603">              
            <input type="password" placeholder="Contraseña" name="contraseña">            
            <input type="submit" value="Enviar">
            <div class="form-div-hijo"><a href="login.php" text-align="center">o ingrese al sistema</a></div>
        </form>
       
    </div>

<?php 
    require("../controlador/plantillas/footer.php")
 ?>