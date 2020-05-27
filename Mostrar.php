<!DOCTYPE>
<html>
<head>
	<title>Mostrar Usuario</title>
	<link rel="stylesheet" type="text/css" href="Estilos.css" />
</head>
<body>
	
		<table align="center" border=1 bgcolor="#FFFFFF">
                    <tr>
                        <td bgcolor="#777777">
                            <p>Precio</p>
                        </td>
                        <td bgcolor="#777777">
                            <p>Producto</p>
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
                                </tr>
                            ";
                        }  
                      ?>
	
</body>
</html>