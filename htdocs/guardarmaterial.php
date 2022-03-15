<?php
include("conexion.php");
//variables
$id = $_POST['id']; 
$nombre = $_POST['nombre'];
$marca = $_POST['marca'];
$modelo = $_POST['modelo'];

//realizar la consulta
$query ="INSERT INTO material (id_material, nombre, marca, modelo)
values ('$id', '$nombre', '$marca', '$modelo')";

//ejecutar consulta
$resultado = $conexion->query($query);
if ($resultado){
    echo 'Insercion exitosa';
    header("location:listarmaterial.php");

}
else{
    echo 'Insercion no exitosa';
}

  
?>