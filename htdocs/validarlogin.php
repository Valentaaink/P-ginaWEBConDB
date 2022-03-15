<?php
 
$usuario =$_POST['user'];
$password =$_POST['pass'];

$conexion=mysqli_connect("localhost","root","gatitos7", "practica");

$consulta="SELECT * FROM login WHERE usuario='$usuario' and password= '$password'";

$resultado=mysqli_query($conexion, $consulta);

$filas=mysqli_num_rows($resultado);

if ($filas>0){
    header("location: paginaprincipal.html"); 
}
else{
    echo'<script>alert("Usuario y contraseña incorrectos")</script>';
    echo"<script> location.href='index.html'</script>";
}

?>