<?php
 session_start();
 session_destroy();
 echo "<script> alert('SESION CERRADA EXITOSAMENTE')
			window.location='../vistas/login.php'
			</script>";		

?>
