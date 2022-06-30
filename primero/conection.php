<?php
class Conection{

	public $con;
//valores iniciales //inicializando
	function __construct(){
     $this->con=mysqli_connect("localhost","root","","primero");

	}
	
}
?>