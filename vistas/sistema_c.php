<?php 
    require("../controlador/plantillas/header.php")
 ?>    
    <div class="contenedor-sistemas">
        <a href="#">
            <div class="cajas">
                <img src="../vistas/img/p1.png" alt="productos">
                <h5>TUS PEDIDOS</h5>
                <p>compra un producto, rastrea un envio, revisa tus compras</p>
            </div>
        </a>
        <a href="sistema_c_c.php">
            <div class="cajas">
                <img src="../vistas/img/l1.png" alt="perfil">
                <H5>ADMINISTRAR TU CUENTA</H5>
                <p>cambia tus datos personales, administra tu seguridad</p>
            </div>
        </a>
        <a href="https://wa.me/+573204619680?text= Hola, un placer saludar, por favor diganos en que le podemos ayudar">
            <div class="cajas">
                <img src="../vistas/img/a1.png" alt="contacto">
                <H5>CONTACTANOS</H5>
                <p>contactanos y habla con nosotros para resolver cualquier duda</p>
            </div>        
        </a>
    </div>
    <div class="contenedor-sistemas">    
        <a href="../controlador/cerrar_sesion.php">
            <div class="cajas">
                <img src="../vistas/img/cerrar_s.png" alt="reportes">
                <H5>CERRAR SESION</H5>                
            </div>        
        </a>
    </div>

<?php 
    require("../controlador/plantillas/footer.php")
 ?> 