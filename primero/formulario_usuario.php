<?php
require_once("Usuarios.php");
$Usuarios=new Usuarios();
if(isset($_GET['usu_id'])){
    $datos=$Usuarios->edit($_GET['usu_id']);
}else{
    $datos['usu_id']=NULL;
    $datos['usu_nombres']=NULL;
    $datos['usu_apellidos']=NULL;
    $datos['usu_cedula']=NULL;
    $datos['usu_ciudad']=NULL;
    $datos['usu_edad']=NULL;
    $datos['usu_genero']=NULL;

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Usuarios</title>
    <style>
        .contenedores{
            margin-top:2px ;
            margin-left:100px;
        }
        label{
            background:#c2ff05;
            width:100px;
            float:left;
            font-family:Firacode;
            font-size:16px;

        }
    </style>
</head>
<body>
    <h1 style="text-align:center; background:black; color:#c2ff05; font-family:Firacode;">Formulario de Nuevos Usuarios</h1>

    <form action="acciones_usuarios.php" method="POST">

        <div class="contenedores">
            <label for="usu_nombres">Nombres</label>
            <input type="hidden" name="usu_id" id="usu_id" value="<?php echo $datos['usu_id']?>">
            <input type="text" name="usu_nombres" id="usu_nombres" value="<?php echo $datos['usu_nombres']?>">
        </div>
          
        <div class="contenedores">
            <label for="usu_apellidos">Apellidos</label>
            <input type="text" name="usu_apellidos" id="usu_apellidos" value="<?php echo $datos['usu_apellidos']?>">
        </div>

        <div class="contenedores">
            <label for="usu_cedula">Cedula</label>
            <input type="text" name="usu_cedula" id="usu_cedula" value="<?php echo $datos['usu_cedula']?>">
        </div>

        <div class="contenedores">
            <label for="usu_ciudad">Ciudad</label>
            <input type="text" name="usu_ciudad" id="usu_ciudad" value="<?php echo $datos['usu_ciudad']?>">
        </div>

        <div class="contenedores">
            <label for="usu_edad">Edad</label>
            <input type="text" name="usu_edad" id="usu_edad" value="<?php echo $datos['usu_edad']?>">
        </div>

        <div class="contenedores">
            <label for="usu_genero">Genero</label>
            <input type="text" name="usu_genero" id="usu_genero" value="<?php echo $datos['usu_genero']?>">
        </div>

        <div class="contenedores">
        <button>Guardar</button>
        </div>


    </form>
</body>
</html> 