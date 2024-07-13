<?php
$host = 'localhost';  // o el hostname/IP de tu servidor de base de datos
$dbname = 'pet_store';  // asegúrate de reemplazarlo con el nombre real de tu base de datos
$username = 'root';  // usuario con acceso a la base de datos
$password = '';  // contraseña del usuario

try {
    $conexion = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
}
?>
