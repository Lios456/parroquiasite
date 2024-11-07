<?php include 'head.php' ?>

<div class="container">
    <center>
        <h1 class="h1">REGISTRO DE PERSONAS</h1>
    </center>
    <div class="container w-50">
        <form action="Controllers/agregarpersona.php" method="post">
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
                <button class="btn btn-success" type="submit">Enviar</button>
            </div>

        </form>
    </div>
</div>

<?php include 'footer.php' ?>