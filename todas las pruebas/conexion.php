<?php
$mysql=new mysqli("localhost","root","","u-qrmedico");
if($mysql->connect_error){
    die("Error de conexion");
}
else{
    echo "Conexion exitosa puro loco";
}