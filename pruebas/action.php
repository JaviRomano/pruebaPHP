<?php
$title = "Datos de Formulario";
include 'header.php';
include 'config.php';


$name = htmlspecialchars($_POST["name"]);
$phone = htmlspecialchars($_POST["phone"]);
$email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
$birthdate = $_POST["birthdate"];
$department = htmlspecialchars($_POST["department"]);

$birthdate_cal = new DateTime($birthdate);
$today = new DateTime();
$age = $today->diff($birthdate_cal)->y;

$department_text = $departments[$department];


echo "<div class='container mt-5'>";
echo "<h2 class='text-black bg-sky text-center d-inline-block border rounded p-3'>Datos Recibidos</h2>";
if (!empty($image_url)) {
    echo "<p><strong>Tu foto:</strong></p>";
    echo "<img src='$image_url' alt='Imagen subida' width='200' class='border rounded'>";
}
echo "<p><strong>Nombre:</strong> $name</p>";
echo "<p><strong>Teléfono:</strong> $phone</p>";
echo "<p><strong>Email:</strong> $email</p>";
echo "<p><strong>Fecha de Nacimiento:</strong> $birthdate</p>";
echo "<p><strong>Edad:</strong> $age años</p>";

echo "<div class='bg-sky d-inline-block border rounded p-3'>";
echo "<p> Hola, $name.</p>";
echo "Confirmamos que tenemos sus datos de contacto.";
echo "<br>";
echo "Una persona del area de <strong>$department_text</strong> se pondra en contacto contigo <br> ";
echo "</div>";
echo "<br>";

echo "<a href='contact.php' class='btn btn-sky mt-3'>Volver</a>";
echo "</div>";