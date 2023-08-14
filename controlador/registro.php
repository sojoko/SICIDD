<?php
	include("../modelo/registro.php");	 		

		if ($x1 > 0){
			echo "<script> alert('EL USUARIO YA EXISTE')
			window.location='../vistas/registrarse.php'
			</script>";
		}
		else if(empty($nombre)){
			echo "<script> alert('EL NOMBRE NO PUEDE QUEDAR VACIO')
			window.location='../vistas/registrarse.php'
			</script>";		
		}
		else if(empty($apellido)){
			echo "<script> alert('EL APELLIDO NO PUEDE QUEDAR VACIO')
			window.location='../vistas/registrarse.php'
			</script>";		
		}
		else if(empty($correo)){
			echo "<script> alert('EL CORREO NO PUEDE QUEDAR VACIO')
			window.location='../vistas/registrarse.php'
			</script>";			
		}
		else if(empty($telefono)){
			echo "<script> alert('EL TELEFONO NO PUEDE QUEDAR VACIO')
			window.location='../vistas/registrarse.php'
			</script>";	
				
		}

		else if(!is_numeric($telefono)){
			echo "<script> alert('EL TELEFONO DEBE SER NUMERICO')
			window.location='../vistas/registrarse.php'
			</script>";
				
		}

		else if(strlen($telefono) != 10){
			
		 	 echo "<script> alert('EL TELEFONO DEBE TENER 10 DIGITOS')
			 window.location='../vistas/registrarse.php'
			 </script>";

		}

		else if(empty($contraseña)){
			echo "<script> alert('LA CONTRASEÑA NO PUEDE QUEDAR VACIA')
			window.location='../vistas/registrarse.php'
			</script>";		
		}


		elseif (!preg_match("/^[a-zA-Z0-9_]*$/",$nombre)){
			?>
  				<span style="font-size:11px;">nombre de usuario invalido. Los espacios y los caracteres especiales no estan permitidos.</span>
  			<?php 
		}
		elseif (!preg_match("/^[a-zA-Z0-9_]*$/",$contraseña)){
			?>
  				<span style="font-size:11px;">contraseña invalida. Los epacios y los caracteres especiales no estan permitidos.</span>
  			<?php 
		}
		else{
			$resultado2 = mysqli_query($conexion,$consulta2);
			
			echo "<script> alert('EL USUARIO HA SIDO CREADO EXITOSAMENTE')
			window.location='../vistas/login.php'
			</script>";	
			  
		}
	
?>