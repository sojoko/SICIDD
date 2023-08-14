<?php 

    include("../controlador/db.php");
    require("../controlador/plantillas/header.php")
 ?>    
    <link rel="stylesheet" href="css/style.css">
    
    <div class="contenedor_boton_volver">
        <a href="registro_producto.php">
            <div class="boton_volver_panel">
                <p>registrar un producto</p> 
            </div>
        </a>
        <a href="sistema_a.php"> 
            <div class = "boton_volver_panel">
                <p>Volver al panel principal</p>
            </div>
         </a>
    </div>
    
      
         <div class="contenedor-tabla">
                <div class="cajas-tabla">
                    <table class="tabla">
                        <thead>
                            <tr class="cabecera">
                                <th>ID</th>
                                <th>NOMBRE</th>
                                <th>PRECIO</th>
                                <th>TIPO DE PRODUCTO</th>                           
                            </tr>
                        </thead>
                        <tbody>
                            <?php                           
                            require("../modelo/sistema_a_cp.php");
                            while($row = mysqli_fetch_array($consulta_1)){ ?>

                                <tr>
                                    <td><?php echo $row['id'] ?></td>
                                    <td><?php echo $row['nombre'] ?></td>
                                    <td><?php echo $row['precio'] ?></td>
                                    <td><?php echo $row['tipoProducto'] ?></td>  
                                    <td>
                                        <a href="editp.php?id=<?php echo $row['id']?>">Modificar</a>
                                    </td>
                                    <td>
                                        <a href="../controlador/eliminarp.php?id=<?php echo $row['id']?>">Eliminar</a>
                                    </td>                           
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>                    
                    </table>
                </div>            
            </div>             
<?php 
    require("../controlador/plantillas/footer.php")
 ?>  