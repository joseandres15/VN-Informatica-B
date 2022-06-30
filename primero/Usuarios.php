<?php
require_once("conection.php");
class Usuarios extends conection{
  function listar_usuarios(){
    $resultado=$this->con->query("SELECT * FROM Usuarios");
    return $resultado->fetch_all(MYSQLI_ASSOC);//
   }
    function create($usu_nombres,$usu_apellidos,$usu_cedula,$usu_ciudad,$usu_edad,$usu_genero){
      $this->con->query("INSERT INTO Usuarios (usu_nombres,usu_apellidos,usu_cedula,usu_ciudad,usu_edad,usu_genero)
      VALUES('$usu_nombres',
             '$usu_apellidos',
             '$usu_cedula',
             '$usu_ciudad',
             '$usu_edad',
             '$usu_genero')
        ");

}
      function edit($usu_id){
             $resultado=$this->con->query("SELECT * FROM Usuarios WHERE usu_id=$usu_id"); 
             return $resultado->fetch_all(MYSQLI_ASSOC)[0];
      }
      function update($usu_nombres,$usu_apellidos,$usu_cedula,$usu_ciudad,$usu_edad,$usu_genero,$usu_id){
             $this->con->query("UPDATE Usuarios 
                                SET usu_nombres='$usu_nombres',
                                usu_apellidos='$usu_apellidos',
                                usu_cedula='$usu_cedula',
                                usu_ciudad='$usu_ciudad',
                                usu_edad='$usu_edad',
                                usu_genero='$usu_genero'
                                WHERE usu_id=$usu_id
                ");  
      }
      
       function delete($usu_id){
            $this->con->query("DELETE FROM Usuarios WHERE usu_id=$usu_id");
      }
    }


?>