<?php
$title = "Registro";
include 'header.php';

?>

<div class="modal-body mt-4 bg-white">
    <form action="action.php" method="post" enctype="multipart/form-data" class="p-4 bg-sky border rounded">
        <div class="mb-3">
            <label for="userName" class="form-label">Nombre usuario:</label>
            <input type="text" name="userName" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" id="email" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="userName" class="form-label">Contraseña:</label>
            <input type="password" id="password" name="password" class="form-control" pattern="{6,15}" required required>
        </div>
        <div class="mb-3">
            <label for="userName" class="form-label">Repita contraseña:</label>
            <input type="password" id="password" name="confirmPassword" class="form-control" required onimput=
            "this.setCustomValidity (this.value != password.value ? 'Debe coincidir con la contraseña introducida previamente.' : '')">
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Nombre:</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Apellidos:</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Número de Teléfono:</label>
            <input type="tel" name="phone" id="phone" class="form-control" pattern="[0-9]{9,15}" required>
        </div>
        <div class="mb-3">
            <label for="birthdate" class="form-label">Fecha de Nacimiento</label>
            <input type="date" name="birthdate" id="birthdate" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="gender" class="form-label">Género: </label>
            <input type="radio" name="gender"
                <?php if (isset($gender) && $gender == "female") echo "checked"; ?>
                value="female">Femenino
            <input type="radio" name="gender"
                <?php if (isset($gender) && $gender == "male") echo "checked"; ?>
                value="male">Masculino
            <input type="radio" name="gender"
                <?php if (isset($gender) && $gender == "other") echo "checked"; ?>
                value="other">Otro
        </div>
        <div class="text-center">
            <p><button type="submit" class="btn btn-light">Aceptar</button>
        </div>
    </form>
</div>