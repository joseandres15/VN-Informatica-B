<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
		h1{
			background:#c2ff05;
			color:black;
			border:solid 1px black;
			border-radius:5px;
			box-shadow:5px 5px 10px #2ef8a0;
			font-size:20;
			text-align:center;
			font-family:Fira Code;
		}
		.menu:hover{
			background:white;
			border:solid 1px green	;
			border-radius:5px;
			color:black;
			box-shadow:5px 5px 10px #2ef8a0;
		    text-decoration:none;
			padding:5px;
            transition:0.4s; 
 		}
	</style>
</head>
<body>
	<h1>Menu Principal</h1>
	<a class="menu" href="lista_clientes.php">Clientes</a>
	<a class="menu"href="lista_usuarios.php">Usuarios</a>
</body>
</html>