<?php
include("db.php");
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "DELETE FROM usuarios WHERE id = $id";
        $result = mysqli_query($conexion,$query);

        if(!$result){
            echo "<script> alert('NO SE PUDO ELIMINAR')
			window.location='../vistas/sistema_a_c.php'
			</script>";		
        }

    
        else{
            echo "<script> alert('SE HA ELIMINADO SATISFACTORIAMENTE')
			window.location='../vistas/sistema_a_c.php'
			</script>";		
        }
       

    }

?>