<?php
class conection{

	public $con; //$con: variable que guarda la conexion a la DB

	function __construct(){
   $this->con=mysqli_connect('localhost','root','','ejemplo d');//''donde esta mi base de datos,usuario
      
	}

	function listar_clientes(){
     $resultado=$this->con->query("SELECT * FROM clientes");
     return $resultado->fetch_all(MYSQLI_ASSOC);

	}
		function listar_habitaciones(){
     $resultado=$this->con->query("SELECT * FROM habitaciones");
     return $resultado->fetch_all(MYSQLI_ASSOC);

	}
		function listar_arriendo(){
     $resultado=$this->con->query("SELECT * FROM arriendo");
     return $resultado->fetch_all(MYSQLI_ASSOC);

	}
}
$conection=new conection();
print_r($conection->listar_clientes());
print_r($conection->listar_habitaciones());
print_r($conection->listar_arriendo());
?>
