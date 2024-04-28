<?php
$servidor="localhost";
$baseDatos="pet_store";
$usuario="root";
$contrasenia="";
try{
    $conexion= new PDO("mysql:host=$servidor;bdname=$baseDatos", $usuario, $contrasenia);
    echo "Conexion establecida";
}catch(Exception $error){
    echo $error->getMessage();
}
?>