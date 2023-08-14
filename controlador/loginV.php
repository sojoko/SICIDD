<?php
    session_start();
    if(isset($_SESSION['correo'])){
        
        switch($_SESSION['tipo_usuario']){

            case 1:
                header("location:../vistas/sistema_a.php");
                break;
            case 2:
                header("location:../vistas/sistema_c.php");
                break;

        }       
    
    }
   

?>