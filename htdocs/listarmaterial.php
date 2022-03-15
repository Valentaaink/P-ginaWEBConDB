<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página WEB Ubuntu</title>
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>
  <div class="list-box">
 <center>
<h2>Lista de materiales</h2>
<table border="2">
    <thead>
        <tr><th colspan="6">MATERIAL REGISTRADO</th></tr>
    </thead>
    <Tbody>
        <tr>
            <td>Id_Material</td>
            <td>Nombre</td>
            <td>Marca</td>
            <td>Modelo</td>
            <td colspan="2">OPERACION</td>
        </tr>
        <?php
           include("conexion.php"); 
           //consulta
           $query="SELECT * FROM material";

           //ejecutar la consulta
           $resultado=$conexion->query($query);
           while($row=$resultado->fetch_assoc()){
            ?>
           
           <tr>
               <td><?php echo $row['id_material']; ?></td>
               <td><?php echo $row['nombre']; ?></td>
               <td><?php echo $row['marca']; ?></td>
               <td><?php echo $row['modelo']; ?></td>
               <td><a href="modificarmaterial.php?id_material=<?php echo $row['id_material']; ?>">Modificar</a></td>
               <td><a href="eliminarmaterial.php?id_material=<?php echo $row['id_material']; ?>">Eliminar</a></td>
           </tr>
           <?php 
           }
           
           ?>
    </Tbody>
</table>
</center>
<br><tr><td><a style="text-decoration:none" href="paginaprincipal.html">INICIO</a></td></tr>
</div>
</body>
</html>