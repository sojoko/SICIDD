
<?php

include('db.php');
	if(isset($_POST['nombre'])){
		$nombre = $_POST['nombre'];
		$precio = $_POST['precio'];
        $tipoProducto = $_POST['tipoProducto'];   
		$img = addslashes(file_get_contents($_FILES['img']['tmp_name']));

		$consulta1=$conexion->query("select * from productos_enteros where nombre='$nombre'");

		if ($consulta1->num_rows>0){
			echo "<script> alert('EL NOMBRE NO PUEDE QUEDAR VACIO')
			window.location='../vistas/registro_producto.php'
			</script>";		
		}
		else if(empty($nombre)){
			echo "<script> alert('LA DESCRIPCION DEL PRODUCTO NO PUEDE QUEDAR VACIA')
			window.location='../vistas/registro_producto.php'
			</script>";				
		}
		else if(empty($precio)){
			echo "<script> alert('EL PRECIO NO PUEDE QUEDAR VACIO')
			window.location='../vistas/registro_producto.php'
			</script>";			
		}	
	
		else{
			
			$conexion->query("insert into productos_enteros (nombre, precio, img, tipoProducto) values ('$nombre', '$precio', '$img', '$tipoProducto')");
			?>
  				 
				
  			<?php
			echo "<script> alert('PRODUCTO CREADO SATISFACTORIAMENTE')
			window.location='../vistas/sistema_a_cp.php.'
			</script>";		
		}
	}
	else{
		echo "<script> alert('ERROR AL REGISTRAR, COMPRUEBA LOS CAMPOS')
			window.location='../vistas/registro_producto.php'
			</script>";		
	}



?>


  

