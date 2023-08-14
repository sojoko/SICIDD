<?php
session_start();
include('../modelo/db.php');
$correo=$_POST['correo'];
$contraseña=$_POST['contraseña'];
$mcontraseña=md5($contraseña);

$_SESSION['correo']=$correo;




$consulta="SELECT*FROM usuarios where correo='$correo' and contraseña='$mcontraseña'";
$resultado=mysqli_query($conexion,$consulta);
$filas=mysqli_fetch_array($resultado);

$_SESSION['tipo_usuario'] = $filas['tipo_usuario'];


        if($filas){
            switch($filas['tipo_usuario']){
                case 1:
                    header("location:../vistas/sistema_a.php");
                    break;
                case 2:
                    header("location:../vistas/sistema_c.php");
                    break;
                default: 
            }
        }
        else{
            ?>
            <?php    
            echo "<script> alert('USUARIO O CONTRASEÑA INVALIDA')
                    window.location='../vistas/login.php'
                    </script>";		
                
            ?>

            <?php
            }           





