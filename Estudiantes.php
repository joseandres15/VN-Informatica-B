<?php
require_once('conection.php');
class clientes extends conection{

	function listar_clientes(){
     $resultado=$this->con->query("SELECT * FROM clientes");
     return $resultado->fetch_all(MYSQLI_ASSOC);
    
    }

}	

 //extends extender acceso a la clase padre.
?>
