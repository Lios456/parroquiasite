<?php
session_start();
include 'head.php';
require_once __DIR__ . '/../routes.php';
?>

<div class="container ">
    <center>
        <h1 class="h1">REGISTRO DE PERSONAS</h1>
    </center>
    <div class="container d-flex justify-content-center">
        <form action="<?php echo BASE_URL . '/Controllers/agregarpersona.php' ?>" method="post">
            <div class="row">
                <div class="col-6">
                    <label for="cedula">Cédula:</label>
                    <input type="text" class="form-control" name="cedula" placeholder="Cédula" required>
                    <label for="apellido1">Apellido Paterno:</label>
                    <input type="text" class="form-control" name="apellido1" placeholder="Apellido Paterno" required pattern="^[a-zA-ZÀ-ÿ\s]+$">
                    <label for="celular">Celular:</label>
                    <input type="text" class="form-control" name="celular" placeholder="Número celular" required>
                </div>
                <div class="col-6">
                    <label for="nombre">Nombres:</label>
                    <input type="text" class="form-control" name="nombre" placeholder="Nombres" required pattern="^[a-zA-ZÀ-ÿ\s]+$">
                    <label for="apellido2">Apellido Materno:</label>
                    <input type="text" class="form-control" name="apellido2" placeholder="Apellido Materno" required pattern="^[a-zA-ZÀ-ÿ\s]+$">
                </div>
                <div style=" width:50%; height:3rem">

                </div>
                <div class="container d-flex justify-content-center">
                    <button class="btn btn-success rounded" type="submit">Enviar</button>
                </div>

            </div>
        </form>
    </div>
</div>


<?php include 'footer.php'; ?>