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

<style>
    form {
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
    padding: 35px 25px;
    border-radius: 25px;
    display: flex;
    flex-direction: column;
    text-align: center;
    width: 375px;
}

form h2 {
    font-size: 22px;
    color:#05213C;
    margin: 0;
}

form p {
    font-size: 16px;
    color:#F2B821;
    margin-bottom: 20px;
}

.input-wrapper {
    position: relative;
    width: 305px;
    margin-bottom: 35px;
}

input {
    color:#BBBBE2;
    padding: 20px 15px 20px 60px;
    width: 100%;
    border-radius: 25px;
    border: 0;
    box-shadow: 0 0 20px rgba(192, 203, 251, 0.7);
    outline: none;
    font-size: 15px;
}

input::placeholder {
    font-size: 15px; 
    color: #BBBBE2;
}

.btn1 {
    padding: 20px;
    background: linear-gradient(
        90deg,
        rgb(19, 24, 68) 25%,
        rgba(28, 46, 137, 0.996) 100%);
    box-shadow: 0 0 20px rgba(192, 203, 251, 0.7);
    color: #fff;
    text-transform: uppercase;
    font-size: 14px;
    cursor: pointer;
}
</style>

<?php include 'footer.php'?>