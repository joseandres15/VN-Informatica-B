<?php
require_once('Estudiantes.php');
$clientes=new clientes();
$consulta=$Estudiantes->listar_clientes();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lista Clientes</title>
</head>
<body>
  <h1 style="background: linear-gradient(to bottom left, yellow,green);">Lista Clientes</h1>
  <table border="4">
  <table width="10%" height="10%" border="1" bgcolor="green" cellpadding="3" cellspacing="1" align="center">
  <tr bgcolor="blue" align="center">
    <tr>
      <th>#</th>
      <th>Nombres</th>
      <th>Apellidos</th>
  

    </tr> 
    <?php
    $x=0;
    foreach($consulta as $c){
      $x;
    echo "<tr>
        <td>$x</td>
            <td>{$c['est_nombre']}</td>
            <td>{$c['est_apellido']}</td>
        
            <td>
              <a href=''>
                <img src='lapiz.png' />
              <a href=''>Del</a>
            </td>

          </tr>";
    

    }
    ?>  

  </table>

</body>
</html>