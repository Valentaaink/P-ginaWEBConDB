<?php
$conexion=mysqli_connect("localhost","root","gatitos7", "practica");

if ($conexion){
     // echo 'Conexion exitosa'; 
}

else{
    echo 'Error al inentar conectar';
}

?>