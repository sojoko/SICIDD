<?php 
    include('db.php');	
    session_start();
    $correo2 = $_SESSION['correo'];
    $query = "SELECT * FROM usuarios WHERE correo = '$correo2'";
    $consulta_1 = mysqli_query($conexion,$query);
 
?>

