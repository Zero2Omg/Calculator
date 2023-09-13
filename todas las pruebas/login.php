<?php
include 'conexion.php';
$usuarios = $_POST['nombre_usuario'];
$psasword = $_POST['pass'];

$sentencia = $conexion -> prepare("SELECT * FROM usuarios WHERE nombre_usuario = ? AND pass = ?");
$sentencia -> bind_param('ss',$usuarios,$psasword);
$sentencia -> execute(); 

$resultado = $sentencia -> get_result();
if ($fila = $resultado -> fetch_assoc()){
    echo json_encode($fila,JSON_UNESCAPED_UNICODE);
}

$sentencia -> close();
$conexion -> close();
?>
