<!DOCTYPE>
<html>
<head>
	<title>Mostrar Usuario</title>
	<link rel="stylesheet" type="text/css" href="Estilos.css" />
</head>
<body>
	<?php
		$Server = "localhost";
	    $Datebase = "usuario";
	    $Usuario = "root";
	    $Password = "";

		$conexion = mysqli_connect($Server, $Usuario, $Password, $Datebase);	   
		$consulta = mysqli_query($conexion, "SELECT FROM usuario");

		echo '<table border="1"';
		echo '<tr>';
		echo '<th id="Nombre">Nombre</th>';
		echo '<th id="Apellido">Apellido</th>';
		echo '<th id="Usuario">Usuario</th>';
		echo '<th id="Passsword">Passsword</th>';
		echo '</tr>';

		while($extraido = mysqli_fetch_array($consulta))
		{
			echo '<tr>';
			echo '<td>'.$extraido['Nombre'].'</td>';
			echo '<td>'.$extraido['Apellido'].'</td>';
			echo '<td>'.$extraido['Usuario'].'</td>';
			echo '<td>'.$extraido['Passsword'].'</td>';
		}
		mysqli_close($conexion);
		echo '</table>';
	?>
</body>
</html>