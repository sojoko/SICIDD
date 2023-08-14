<?php 

    include("../controlador/db.php");
    require("../controlador/plantillas/header.php")
 ?>    
        <div class="contenedor_boton_volver">
            <a href="sistema_c.php"> 
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
                         
                            <th>NOMBRE</th>
                            <th>APELLIDO</th>
                            <th>CORREO</th>
                            <th>TELEFONO</th>                           
                                                 
                        </tr>
                    </thead>
                    <tbody>
                        <?php                           
                        include('../modelo/sistema_c_c.php');  
                   
                        while($row = mysqli_fetch_array($consulta_1)){ 
                        ?>
                      

                            <tr>
                                
                                <td><?php echo $row['nombre'] ?></td>
                                <td><?php echo $row['apellido'] ?></td>
                                <td><?php echo $row['correo'] ?></td>
                                <td><?php echo $row['telefono'] ?></td>                               
                                
                                <td>
                                    <a href="edit_usuario.php?id=<?php echo $row['id']?>">Modificar mis datos</a>
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