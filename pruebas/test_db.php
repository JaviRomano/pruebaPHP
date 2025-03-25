<?php
$host = 'localhost';
$port = '3307'; // Asegúrate de que sea el puerto correcto
$dbname = 'prueba_multiplicalia';
$user = 'pruebaUser';
$pass = '111111';

try {
    $pdo = new PDO("mysql:host=$host;port=$port;dbname=$dbname;charset=utf8mb4", $user, $pass);
    echo "✅ Conexión exitosa con la base de datos.";
} catch (PDOException $e) {
    die("Error en la putisima madre de la conexion conexión: " . $e->getMessage());
}
?>
