<?php 
    require("../controlador/plantillas/header.php")
 ?>

    <h1 class="h1f">Contacta con nosotros</h1>
   
    <div class="form1">

        <form action="registro.php" method="post">
          
            <input type="text" placeholder="Nombre completo" name="nombre">           
            <input type="text" placeholder="Correo" name="correo">
            <input type="text" placeholder="Telefono" name="telefono" data-title="si es un telefono fijo, por favor ingresa el prefijo 603">              
            <textarea id="mensaje" name="mensaje" placeholder="Mensaje"></textarea>          
            <input type="submit" value="Enviar">      
        </form>
       
    </div>

<?php 
    require("../controlador/plantillas/footer.php")
 ?>