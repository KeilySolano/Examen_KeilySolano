<?php
    class Conexion extends mysqli 
    {
	   public function __construct()
       {
            $Server = "localhost";
            $Datebase = "usuario";
            $Usuario = "root";
            $Password = "";

	        parent::__construct($Server, $Usuario, $Password, $Datebase);
            $this->query("SET NAMES 'utf8';");
            $this->connect_errno ? die('Error en la conexion de la base de datos.') : $feil="<br><br> Conectado con la base de datos: ";
            unset($feil);
       }
    }
?>