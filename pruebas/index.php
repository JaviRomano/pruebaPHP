<?php
$title = "Inicio";
include 'header.php';

$today = new DateTime();
$formattedDate = $today->format('l, d F Y');
$formattedHour = $today->format('H:i:s');
 
echo "<div class='container mt-2'>";
echo "<h3 class='text-black bg-sky text-center d-inline-block border rounded p-3'>Pagina de inicio </h3><br>";
echo "Esta página se recargó por ultima vez a las: $formattedHour";
echo "<h5>Hoy es $formattedDate</h5>";
echo "</div>";
?> 