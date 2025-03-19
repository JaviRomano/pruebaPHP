<?php
$title = "Acerca de";
include 'header.php';


$imgPhp = "assets/img/phpLogo.svg";/* SVG::fromFile('path/to/file.svg');  -  $image = SVG::fromString($svg); */
$imgHtml = "assets/img/html5.svg";
$imgCss = "assets/img/css3-logo.svg";
$imgBs = "assets/img/bslogo.svg";

echo "<div class='container mt-5'>";
echo "<h2 class='text-black bg-sky text-center d-inline-block border rounded p-3'>Acerca de la web</h2>";

echo "<div class='bg-sky d-inline-block border rounded mt-3 mb-4 p-3'>";
echo "<p>Esta es mi primera página desarrollada en <strong>PHP</strong>, haciendo uso tambien de <strong>HTML</strong>,
    <strong>CSS</strong> y <strong>Bootstrap</strong> correspondiente a la primera tarea asignada en mis prácticas de DAM,
    primeros pasos en PHP.</p>";
echo "<div class='container mt-5'>";
echo "<div class='row text-center mb-4'>";
echo "<div class='col-3 d-flex justify-content-center'><img src= '$imgPhp' width='80%' alt='PHP'></div>";
echo "<div class='col-3 d-flex justify-content-center'><img src= '$imgHtml' width='80%' alt='HTML'></div>";
echo "<div class='col-3 d-flex justify-content-center'><img src= '$imgCss' width='80%' alt='CSS'></div>";
echo "<div class='col-3 d-flex justify-content-center'><img src= '$imgBs' width='80%' alt='Bootstrap'></div>";
echo "</div>";
echo "</div>";

echo "<p>Enlace a <strong>GitHub</strong>: <a href='https://github.com/JaviRomano/pruebaPHP' target='_blank'>https://github.com/JaviRomano/pruebaPHP</a></p>";

echo "</div>";
echo "</div>";
