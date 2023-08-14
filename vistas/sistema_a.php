<?php 
    require("../controlador/plantillas/header.php")
 ?>
     
    <div class="contenedor-sistemas">
        <a href="sistema_a_cp.php"><div class="cajas">
            <img src="../vistas/img/p1.png" alt="productos">
           <h5>ADMINISTRAR PRODUCTOS</h5>
           <p>aqui puedes, agregar, modificar y eliminar un producto</p>
        </div></a>
        <a href="sistema_a_c.php">
            <div class="cajas">
                <img src="../vistas/img/u1.png" alt="usuarios">
                <H5>ADMINISTRAR USUARIOS</H5>
                <p>aqui puedes, agregar, modificar y eliminar un usuario</p>
            </div>
        </a>
        <a href="#">
            <div class="cajas">
                <img src="../vistas/img/e1.png" alt="pedidos">
                <H5>ADMINISTRAR PEDIDOS</H5>
                <p>aqui puedes adminstrar los pedidos</p>
            </div>        
        </a>
        <a href="../vistas/estadisticas.php">
            <div class="cajas">
                <img src="../vistas/img/esta.png" alt="reportes">
                <H5>ESTADISTICAS</H5>
                <p>aqui puedes monitorear las estadisticas de la pagina</p>
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