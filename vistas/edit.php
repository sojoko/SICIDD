<?php 
    require("../controlador/plantillas/header.php")
 ?>

    <!-- fragmento de codigo que sirve para generar update en la tabla de usuarios -->

    <?php
        include("../controlador/db.php");

        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $query = "SELECT * FROM usuarios WHERE id = $id";
            $result = mysqli_query($conexion, $query);
            if(mysqli_num_rows($result) == 1) {
                $row = mysqli_fetch_array($result);
                $nombre = $row['nombre'];
                $apellido = $row['apellido'];
                $correo = $row['correo'];
                $telefono = $row['telefono'];
                $contraseña = $row['contraseña'];
                
            }
        }

        if(isset($_POST['update'])){    
            $id = $_GET['id'];
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $correo = $_POST['correo'];
            $telefono = $_POST['telefono'];
            $contraseña = $_POST['contraseña'];

            $query = "UPDATE usuarios set nombre = '$nombre', apellido='$apellido', correo='$correo', telefono='$telefono', contraseña='$contraseña' WHERE id = $id";
            mysqli_query($conexion, $query);
            header("Location: sistema_a_c.php");

        }
    ?>

   
    <div class="contenedor-tabla-mod">
        <div class="contenedor-columnas"> 
            <div class="form1">                      
                    <form action="edit.php?id=<?php echo $_GET['id']?>" method="post">          
                        <input type="text" placeholder="actualiza el nombre" name="nombre" value="<?php echo $nombre?>">
                        <input type="text" placeholder="actualiza el apellido" name="apellido" value="<?php echo $apellido?>">   
                        <input type="text" placeholder="actualiza el correo" name="correo" value="<?php echo $correo?>">
                        <input type="text" placeholder="actualiza el telefono" name="telefono" value="<?php echo $telefono?>">              
                        <input type="password" placeholder="Contraseña" name="contraseña" value="<?php echo $contraseña?>">            
                       <button class="form-btn" name="update">Actualizar</button>
                   
                </form>
            </div>    
        </div>
    </div>

<?php 
    require("../controlador/plantillas/footer.php")
 ?>




