<?php

$page_title = isset($title) ? $title : "Error al inyectar titulo";

$current_page = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../pruebas/assets/css/styles.css">
    <styles>

    </styles>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-black bg-sky">
        <div class="container">

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <?php if ($current_page !== 'login.php'): ?>
                <?php if (isset($_SESSION['userName'])): ?>
                    <p class="m-0">Bienvenido, <?php echo $_SESSION['userName']; ?>  </p>
                    <a href="logout.php" class="mx-2 btn btn-danger">Cerrar Sesion</a>
                <?php else: ?>
                    <a href="login.php" class="btn btn-light">Iniciar Sesion</a>
                <?php endif; ?>
            <?php endif; ?>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link" href="about.php">Acerca de</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.php">Contacto</a></li>
                </ul>
            </div>

        </div>
    </nav>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>