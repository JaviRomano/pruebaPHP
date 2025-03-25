<?php

$host = 'localhost';
$port = '3307';
$dbname = 'prueba_multiplicalia';
$user = 'root';
$pass = 'Changem0';

try {
    $pdo = new PDO("mysql:
    host=$host;
    port=$port;
    dbname=$dbname;
    charset=utf8mb4",
    $user,
    $pass);

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    die("Error en la conexion: " . $e->getMessage());
}

$departments = [
    "hhrr" => "recursos humanos",
    "service" => "servicios",
    "sells" => "ventas",
    "another" => "otras gestiones generales"
];
?>