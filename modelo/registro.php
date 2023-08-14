<?php
	include('db.php');	
	
		$nombre = $_POST['nombre'];
		$apellido = $_POST['apellido'];
        $correo = $_POST['correo'];
        $telefono = $_POST['telefono'];
        $contraseña = $_POST['contraseña'];	
       

		$consulta1=$conexion->query("select * from usuarios where correo='$correo'");
        $x1 = mysqli_num_rows($consulta1);

		
	    $mcontraseña=md5($contraseña);
		$consulta2 = "INSERT into usuarios (nombre, apellido, correo, telefono, contraseña) values ('$nombre', '$apellido', '$correo', '$telefono', '$mcontraseña')";
			
?>