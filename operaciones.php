<?php
class operaciones
{
  public $n1;
  public $n2;

}

function __construct(){
    $this->$n1=10;
    $this->$n2=25;
 }
 function suma(){
   return $this->resultado=$this->n1+$this->n2;
 }
  function resta(){
   return $this->resultado=$this->n1-$this->n2;
 }

 function multiplicacion(){
   return $this->resultado=$this->n1*$this->n2;
 }

 function division(){
   return $this->resultado=$this->n1/$this->n2;
 }

$operaciones=new Operaciones(); //instanciar la clase
echo $operaciones->suma();
echo $operaciones->resta();
echo $operaciones->multiplicacion();
echo $operaciones->division();

?>