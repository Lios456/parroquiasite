<?php include 'head.php' ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="http://localhost/PARROQUIASITE/Views/css/login.css">
</head>
<body>
    <br><br>
   <center>
    <form methoud="post">
        <h2>Login</h2>
        <p> Inicio de sesión</p>
        <div class=input-wrapper>
            <input type="text" name="name" placeholder="Nombre">
        </div>
        <div class="input-wrapper">
            <input type="password" name="password" placeholder="Contraseña">
        </div>
        <input class="btn1 btn-danger" type="submit" name="register" value="enviar">

    </form>
    </center>
</body>
</html>


<?php include 'footer.php'?>