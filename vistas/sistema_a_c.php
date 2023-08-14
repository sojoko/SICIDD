<?php 

    include("../controlador/db.php");
    require("../controlador/plantillas/header.php")
 ?>    

        <div class="contenedor_boton_volver">           
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
                            <th>APELLIDO</th>
                            <th>CORREO</th>
                            <th>TELEFONO</th>                           
                            <th>TIPO DE USUARIO</th>                           
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include('../modelo/sistema_a_c.php');    
                        while($row = mysqli_fetch_array($consulta_1)){ ?>

                            <tr>
                                <td><?php echo $row['id'] ?></td>
                                <td><?php echo $row['nombre'] ?></td>
                                <td><?php echo $row['apellido'] ?></td>
                                <td><?php echo $row['correo'] ?></td>
                                <td><?php echo $row['telefono'] ?></td>                               
                                <td><?php echo $row['tipo_usuario']?></td>
                                <td>
                                    <a href="edit.php?id=<?php echo $row['id']?>">Modificar</a>
                                </td>
                                <td>
                                    <a href="../controlador/eliminar.php?id=<?php echo $row['id']?>">Eliminar</a>
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