<?php
include 'header.php';
require 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userName = $_POST['userName'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $phone = $_POST['phone'];
    $birthdate = $_POST['birthdate'];
    $gender = $_POST['gender'] ?? null;

    if ($password != $confirmPassword) {
        echo "<div class='container mt-5'>";
        echo "<h2 class='text-black bg-sky text-center d-inline-block border rounded p-3'>Error</h2>";
        echo "<p>Las contraseñas no coinciden.</p>";
    }

    $check = $pdo->prepare("SELECT COUNT(*) FROM users WHERE userName = :userName OR email = :email");

    $check->execute([
        'userName' => $userName,
        'email' => $email
    ]);
    if ($check->fetchColumn() > 0) {
        echo "<div class='container mt-5'>";
        echo "<h2 class='text-black bg-danger text-center d-inline-block border rounded p-3'>Error</h2>";
        echo "<p>El userName o email introducido se encuentra actualmente en uso. Por favor, elige otro.</p>";
        exit();
    }
    try {
        $password_hash = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO users (userName, email, password, name, surname, phone, birthdate, gender)
    VALUES (:userName, :email, :password, :name, :surname, :phone, :birthdate, :gender)";

        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            'userName' => $userName,
            'email' => $email,
            'password' => $password_hash,
            'name' => $name,
            'surname' => $surname,
            'phone' => $phone,
            'birthdate' => $birthdate,
            'gender' => $gender
        ]);

        echo "<div class='container mt-5'>";
        echo "<h2 class='text-black bg-sky text-center d-inline-block border rounded p-3'>Enhorabuena</h2>";
        echo "<p>Usuario registrado correctamente</p>";
    } catch (PDOException $e) {
        echo "<div class='container mt-5'>";
        echo "<h2 class='text-black bg-danger text-center d-inline-block border rounded p-3'>Error</h2>";
        echo "<p><strong>Se ha producido un error al registrar el usuario:</strong> " . $e->getMessage() . "</p></div>";
    }
}
