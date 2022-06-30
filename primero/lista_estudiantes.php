<?php
require_once('Estudiantes.php');
$Estudiantes=new Estudiantes();
$consulta=$Estudiantes->listar_estudiantes();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Lista de Estudiantes</title>
	<style>
		th{
			padding: 5px;
			background: #c2ff05;
			color:black;
		}
		td{
			padding: 5px;
			border:solid 1px #807979;
		}
		table{
			width:80%;
			border-collapse:collapse;
		}
		a{
		background:#c2ff05;
			color:black;
			border:solid 1px black;
			border-radius:5px;
			box-shadow:5px 5px 10px #2ef8a0;
			font-size:20;
			text-align:center;
			font-family:Fira Code;
			}
		img{
			width:20px;
		}
		img{
			width:20px;
		}
		.nuevo{
			background:#c2ff05;
			border-radius:5px;
			color:black;
			box-shadow:5px 5px 10px #2ef8a0;
		    text-decoration:none;
		}

	</style>
</head>
<body>
	<h1 style="background:#c2ff05;text-align:center;color:black;">Lista de Estudiantes</h1>
	<a href="formulario_estudiante.php">Nuevo Estudiante</a>
	<table align="center">
		<tr>
			<th>#</th>
			<th>Nombres</th>
			<th>Apellidos</th>
			<th>Cedula</th>
			<th>Ciudad</th>
			<th>Edad</th>
			<th>Genero</th>
			<th>Acciones</th>

		</tr>
  	<?php
  	$x=0;
  	foreach($consulta as $c){
  		$x++;
  	echo "<tr>
  			<td>$x</td>
  			<td>{$c['est_nombres']}</td>
  			<td>{$c['est_apellidos']}</td>
  			<td>{$c['est_cedula']}</td>
  			<td>{$c['est_ciudad']}</td>
  			<td>{$c['est_edad']}</td>
  			<td>{$c['est_genero']}</td>
  			<td>
  			<a href='formulario_estudiante.php?est_id={$c["est_id"]}'>
  				<img src='edit.png' />
  			</a>
  		 <a href='acciones_estudiantes.php?est_id={$c['est_id']} 'onclick='return validar()'  >
  		 <img src='delete.png'/>
  			</a>
  			</td>
  			</tr>";	
  }
   ?>	
</table>
</body>
</html>
<script>
	function validar(){
		if(confirm("¿Quieres eliminar este estudiante?")){
			return true;
		}else{
			return false;
		}
	}
</script>