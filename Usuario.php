<?php
            include ('ValidarUsuario.php');

            $Validere = new ValidarUsuario;

            $Nombre =$_POST['Nombre'];
            $Password =$_POST['Password'];

            $key = $Validere->ValidarBruker($Nombre, $Password);

            var_dump($key);

         if($key ->num_rows == 1 )
         {
              header("location:Agregar.php");
         }
         else 
         {
              header("location:Index.html");
         }
?>