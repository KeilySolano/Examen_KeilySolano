<!DOCTYPE>
<html>
<head>
	<title>Agregar Usuario</title>
</head>
<body>
	<?php 
		$Server = "localhost";
	    $Datebase = "usuario";
        $Usuarios = "root";
        $Contrase�a = "";	

		$conexion=mysqli_connect($Server,$Usuarios,$Contrase�a,$Datebase)
			or die("Error al conectar");

		$Nombre = $_POST['txtNombre'];
		$Apellido = $_POST['txtApellido'];
		$Usuario = $_POST['txtUsuario'];
		$Password = $_POST['txtPassword'];

		
		$insertar = "INSERT into usuario values ('$Nombre','$Apellido','$Usuario','$Password')";

		$resultado = mysqli_query($conexion,$insertar)
			or die("Error al conectar");

		mysqli_close($conexion);
		echo "Datos ingresados";

		header("location:Index.html");
	?>
</body>
</html>