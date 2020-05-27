<!DOCTYPE>
<html>
<head>
	<title>Agregar Usuario</title>
	<link rel="stylesheet" type="text/css" href="Estilos.css" />
</head>
<body>
	<form action="formulario.php" method="POST">
		Nombre:<input type="text" name="txtNombre">;
		Apellido:<input type="text" name="txtApellido">;
		Usuario:<input type="text" name="txtUsuario">;
		Contraseña:<input type="text" name="txtPassword">;	
        
       <form action="Index.html">
            <input type="submit" value="Salir" name="Elimanr">
     </form>                
     
	</form>
	<table align="center" border=1 bgcolor="#FFFFFF">
                    <tr>
                        <td bgcolor="#777777">
                            <p>Nombre</p>
                        </td>
                        <td bgcolor="#777777">
                            <p>Apellido</p>
                        </td>
                        <td bgcolor="#777777">
                            <p>Usuario</p>
                        </td>
                        <td bgcolor="#777777">
                            <p>Contraseña</p>
                        </td>
                    </tr>
                    <?php
                         include('Conexion.php');
                         $con = new Conexion();
                        $query="SELECT * FROM `usuario` WHERE 1;";
                        $pro=$con->query($query);
                        $con->close();
                        $total=0;
                        
                        while($row=mysqli_fetch_assoc($pro))
                        {
                            echo "
                                <tr>
                                    <td>
                                        <p>".$row['Nombre']."</p>
                                    </td>
                                    <td>
                                        <p>".$row['Apellido']."</p>
                                    </td>
                                    <td>
                                        <p>".$row['Usuario']."</p>
                                    </td>
                                    <td>
                                        <p>".$row['Password']."</p>
                                    </td>
                                </tr>
                            ";
                        }  
                      ?>
</body>
</html>