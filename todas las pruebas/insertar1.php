<?php

$conexion =mysqli_connect('localhost', 'root','','u-qrmedico');
if(!$conexion){
    echo "error de conexion";
}
$nombre =$_POST['nombre'];
$email =$_POST['email'];
$usuario =$_POST['usuario'];
$password =$_POST['password'];

$query ="INSERT INTO usuarios(nombre_completo,correo,nombre_usuario,pass) values('$nombre','$email','$usuario','$password')";
$resultado =mysqli_query($conexion,$query);

if($resultado){
    echo "registro correctamente";
}else{
    echo "error";
}

?>