<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <h1>Cabecera</h1>
    <p>Párrafo</p>
</body>
</html>
<?php
echo "Hola mundo!";

echo "<br>";

$numero = 10;
echo "La variable número es igual a: " . $numero;



function sumar ($a, $b) {
    return $a + $b;
}
?>