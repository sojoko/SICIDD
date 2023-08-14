<?php 
    require("../controlador/plantillas/header.php")
 ?>

    <!-- fragmento de codigo php que sirve para actualizar la informacion de la tabla de productos -->
    <?php
        include("../controlador/db.php");

        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $query = "SELECT * FROM productos_enteros WHERE id = $id";
            $result = mysqli_query($conexion, $query);
            if(mysqli_num_rows($result) == 1) {
                $row = mysqli_fetch_array($result);
                $nombre = $row['nombre'];
                $precio = $row['precio'];         
                $tipo = $row['tipoProducto'];
               
            }
        }

        if(isset($_POST['update'])){    
            $id = $_GET['id'];
            $nombre = $_POST['nombre'];
            $precio = $_POST['precio'];
            $tipo = $_POST['tipoProducto'];
        

            $query = "UPDATE productos_enteros set nombre = '$nombre', precio='$precio', tipoProducto='$tipo' WHERE id = $id";
            mysqli_query($conexion, $query);
            header("Location: sistema_a_cp.php");

        }
    ?>

    <div class="contenedor-tabla-mod">
        <div class="contenedor-columnas"> 
            <div class="form1">                      
                    <form action="editp.php?id=<?php echo $_GET['id']?>" method="post">          
                        <input type="text" placeholder="actualiza la descripcion" name="nombre" value="<?php echo $nombre?>">
                        <input type="text" placeholder="actualiza el precio" name="precio" value="<?php echo $precio?>">   
                        <input type="text" placeholder="actualiza el tipo" name="tipoProducto" value="<?php echo $tipo?>">                          
                       <button class="form-btn" name="update">Actualizar</button>
                   
                </form>
            </div>    
        </div>
    </div>
<?php 
    require("../controlador/plantillas/footer.php")
 ?>




