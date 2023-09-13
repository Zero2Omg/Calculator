<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    require_once 'conexion.php';
    $nombre=$_POST["nombre"];
    $apellido=$_POST["apellido"];
    $correo=$_POST["correo"];
    $nombre_usuario=$_POST["nombre_usuario"];
    $pass=$_POST["pass"];

     $query="INSERT INTO usuarios
      (nombre          ,apellido      ,correo     ,nombre_usuario     ,pass)
      VALUES
      ('".$nombre."','".$apellido."','".$correo."','".$nombre_usuario."','".$pass."')";
    $resultado=$mysql->query($query);
    if($resultado==true){
        echo "El usuario se inserto de forma existosa";
    }
    else{
        echo "Error al insertar el usuario";
    }

}