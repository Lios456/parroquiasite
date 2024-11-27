<?php include 'head.php' ?>
<body>
    <br><br>
   <center>
    <form method="post" action="<?php echo BASE_URL ?>/Controllers/iniciarsesion.php">
        <h2>Login</h2>
        <p> Inicio de sesión</p>
        <div class=input-wrapper>
            <input type="text" name="name" placeholder="Usuario" required>
        </div>
        <div class="input-wrapper">
            <input type="password" name="password" placeholder="Contraseña" required>
        </div>
        <button class="btn1 btn-danger rounded" type="submit" >Log In</button>

    </form>
    </center>
</body>
</html>


<?php include 'footer.php'?>