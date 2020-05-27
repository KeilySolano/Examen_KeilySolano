<?php
      include('Conexion.php');

      class ValidarUsuario
      {
          public function ValidarBruker($User, $Pass)
          {
                $Us = new Conexion();
                $querey ="SELECT * FROM `usuario` WHERE `Usuario`='$User' AND `Password`= '$Pass';";
                $Bruker=$Us->query($querey);
                $Us->close();
                return $Bruker;
          }

      }
?>
