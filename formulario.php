<!DOCTYPE html>
<html>
<head>
	<title>Agregar Usuario</title>
</head>
<body>
	<?php 

		include('Conexion.php');
	    $con = new Conexion();
        $Nombre = $_POST['txtNombre'];
		$Apellido = $_POST['txtApellido'];
		$Usuario = $_POST['txtUsuario'];
		$Password = $_POST['txtPassword'];

        $query="INSERT INTO `usuario`( `Nombre`, `Apellido`, `Usuario`, `Password`) VALUES ('$Nombre','$Apellido','$Usuario','$Password');";                
        $consulta=$con->query($query);
        $con->close();						
	?>
</body>
</html>