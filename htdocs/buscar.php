<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página WEB Ubuntu</title>
    <link rel="stylesheet" href="CSS/style.css">
</head>
</head>
<body>
<div class="rbusq-box">
<center>
<h2>Buscar</h2>
<table border="2">
    <thead>
        <tr><th colspan="6">MATERIAL</th></tr>
    </thead>
    <Tbody>
        <tr>
            <td>Id_Material</td>
            <td>Nombre</td>
            <td>Marca</td>
            <td>Modelo</td>
        </tr>
        <?php
           include("conexion.php"); 
           $nombre=$_REQUEST['nombre'];

           //consulta
           $query="SELECT * FROM material WHERE nombre='$nombre'";

           //ejecutar la consulta
           $resultado=$conexion->query($query);
           while($row=$resultado->fetch_assoc()){
            ?>
           
           <tr>
               <td><?php echo $row['id_material']; ?></td>
               <td><?php echo $row['nombre']; ?></td>
               <td><?php echo $row['marca']; ?></td>
               <td><?php echo $row['modelo']; ?></td> 
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