<?php
session_start();

$title = "Login";
include 'header.php';
?>

<div class="container p-3" style="max-width: 400px;">
    <div class="modal-body mt-4 bg-sky border rounded p-3">
        <h2 class="text-center">Iniciar sesión</h2>
        <form action="action_login.php" method="post" class="p-4 bg-sky">
            <div class="mb-3">
                <label for="userName" class="form-label">Nombre de usuario</label>
                <input type="text" class="form-control" id="userName" name="userName" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Contraseña</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-light">Aceptar</button>
            </div>
        </form>
        <div class="text-center">
            <a href='register.php' class='btn btn-orange me-3'>
                Registrar nuevo usuario
            </a>
        </div>
    </div>
</div>