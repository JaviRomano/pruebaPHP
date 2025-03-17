<?php
$title = "Inicio";
include 'fragments/header.php';

?>
<div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="modalTitle" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="text-center text-primary">Formulario</h5>
            </div>
            <div class="modal-body mt-4 bg-white">
                <form action="fragments/action.php" method="post">
                    <p>Su nombre: <input type="text" name="nombre" /></p>
                    <p>Su edad: <input type="text" name="edad" /></p>
                    <p><input type="submit" /></p>
                </form>
                <p>Modal body text goes here.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Save changes</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<div class="text-center mt-4">
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
        Abrir Formulario
    </button>
</div>