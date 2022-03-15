<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página WEB Ubuntu</title>
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>
<div class="modif-box">
    <?php
    include("conexion.php");
    $id=$_REQUEST['id_material'];
    
    //consulta
    $query="SELECT * FROM material WHERE id_material='$id'";

    //ejecutar la consulta 
    $resultado=$conexion-> query($query);
    $row=$resultado->fetch_assoc();

    ?>
    <center>
    <form action="guardarmodificacion.php?id_material=<?php echo $row['id_material']; ?>" method="POST">
    <label for="">ID MATERIAL</label>
    <input type="text" name="id" id="" value="<?php echo $row['id_material']; ?>"> <br>
    <label for="">NOMBRE</label>
    <input type="text" name="nombre" id="" value="<?php echo $row['nombre']; ?>"> <br>
    <label for="">MARCA</label>
    <input type="text" name="marca" id="" value="<?php echo $row['marca']; ?>"> <br>
    <label for="">MODELO</label>
    <input type="text" name="modelo" id="" value="<?php echo $row['modelo']; ?>"> <br>
    <input type="submit" value="guardar">
</form>
</center>
<br><tr><td><a style="text-decoration:none" href="paginaprincipal.html">INICIO</a></td></tr>
</div>
</body>
</html>