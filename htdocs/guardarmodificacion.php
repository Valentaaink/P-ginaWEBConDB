<?php
include("conexion.php");
$id=$_REQUEST['id'];
$nombre=$_POST['nombre'];
$marca=$_POST['marca'];
$modelo=$_POST['modelo'];

$query="UPDATE material SET id_material='$id', nombre='$nombre', marca='$marca', modelo='$modelo'
WHERE id_material='$id'";

$resultado=$conexion->query($query);

if($resultado){
    echo 'Actualización correcta';
    header("location: listarmaterial.php");

}
else{
    echo 'No se ha podido actualizar';
}

?>