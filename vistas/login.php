<?php 
    require("../controlador/plantillas/header.php");
    require("../controlador/loginV.php");
 ?>

    <h1 class="h1f">INICIAR SESION</h1>
    <div class="form1">
      
        <form action="../controlador/validar.php" method="post">
    
            <input type="text" placeholder="Correo electronico" name="correo">
        
            <input type="password" placeholder="Contraseña" name="contraseña">
            <div class="registrarse">
                <a href="#"><p>¿olvido su contraseña?</p></a>
                <a href="registrarse.php"><p>registrarse</p></a>
            </div>
            <input type="submit" value="Enviar">
        </form>

    </div>
<?php 
    require("../controlador/plantillas/footer.php")
 ?>