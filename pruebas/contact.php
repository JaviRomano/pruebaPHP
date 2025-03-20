<?php
$title = "Contacto";
include 'header.php';
include 'config.php';  // este tipo de datos suele ubicarse en archivo 'config.php'

?>


<br>
<p class="text-center">Si necesita ponerse en contacto no dude en rellenar el siguiente formulario y nos pondremos en contacto con usted a la mayor brevedad.</p>
<div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="modalTitle" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-white text-center">
                <h5 class="text-center">Formulario de contacto</h5>
            </div>
            <div class="modal-body mt-4 bg-white">
                <form action="action.php" method="post" enctype="multipart/form-data" class="p-4 bg-sky border rounded">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nombre:</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Número de Teléfono:</label>
                        <input type="tel" name="phone" id="phone" class="form-control" pattern="[0-9]{9,15}" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" id="email" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="birthdate" class="form-label">Fecha de Nacimiento</label>
                        <input type="date" name="birthdate" id="birthdate" class="form-control" required>
                    </div>                   
                    <div class="mb-3">
                        <label for="department" class="form-label">¿Con quien desea contactar?</label>
                        <select name="department" id="department" class="form-select" required>
                            <option value="" selected disabled>Seleccione departamento al que desea contactar</option>
                            <?php

                            foreach ($departments as $key => $deptSelect) {
                                echo "<option value='" . $key . "'>" . $deptSelect . "</option>";
                            }
                            ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Añadir imagen:</label>
                        <input type="file" name="image" id="image" class="form-control" accept="image/*">
                    </div>

                    <div class="text-center">
                        <p><button type="submit" class="btn btn-light">Aceptar</button>
                    </div>
                </form>
            </div>
            <div class="modal-footer bg-white">
                <button type="button" class="btn btn-sky" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
<div class="text-center mt-4">
    <button type="button" class="btn btn-sky" data-bs-toggle="modal" data-bs-target="#myModal">
        Formulario de contacto
    </button>
</div>