<?php
session_start();
require 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userName = $_POST['userName'];
    $password = $_POST['password'];

    $stmt = $pdo->prepare("SELECT id, userName, email, password FROM users WHERE userName = :userName");
    $stmt->execute(['userName' => $userName]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['userName'] = $user['userName'];
        $_SESSION['email'] = $user['email'];

        header("Location: dashboard.php");
        exit();
    } else {
        echo "<div class='container mt-5'>";
        echo "<h2 class='text-black bg-danger text-center d-inline-block border rounded p-3'>Error</h2>";
        echo "<p>Usuario o contraseña incorrectos.</p>";
    }
}
