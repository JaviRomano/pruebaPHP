<?php
$title = "Inicio";
include 'header.php';

$today = new DateTime();
$formattedDate = $today->format('l, d F Y');
$formattedHour = $today->format('H:i:s');

echo "<div class='container pt-4 pb-5 mt-2'>
<h3 class='text-black bg-sky text-center d-inline-block border rounded p-3'>Pagina de inicio </h3><br>
<h5 class='text-black text-center d-inline-block pt-5 pb-2'>Esta página se recargó por ultima vez a las: $formattedHour</h5>
<h5>Hoy es $formattedDate</h5>

<div class=' mt-4'>
<a href='login.php' class='btn btn-sky me-3'>
        Login
    </a>
<a href='register.php' class='btn btn-orange me-3'>
        Registrar nuevo usuario
    </a>
</div>
</div>";