<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
$title = "Dashboard";
include 'header.php';
?>

<div class="container p-3">
    <h2>Bienvenido, <?php echo isset($_SESSION['userName']) ? $_SESSION['userName'] : "Usuario"; ?>!</h2>
    <p>Has iniciado sesión correctamente.</p>
    <a href="logout.php" class="btn btn-sky">Cerrar Sesión</a>
</div>