<?php

include("conexion.php");

$id=$_REQUEST['id_material'];

$requery="DELETE FROM material WHERE id_material='$id'";

$resultado=$conexion->query($requery);
if($resultado){
    echo 'Se ha eliminado correctamente';
    header("location: listarmaterial.php");
}
else{
    echo 'No se ha podido eliminar';
}

?>