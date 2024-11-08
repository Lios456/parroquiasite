<?php
include __DIR__ . "/../Models/mensaje.php";
include __DIR__ . "/../routes.php";
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $mensaje = new Mensaje();
    $mensaje->name = $_POST['name'];
    $mensaje->email = $_POST['email'];
    $mensaje->phone = $_POST['phone'];
    $mensaje->address = $_POST['address'];
    $mensaje->message = $_POST['message'];

    try{
        if ($mensaje->agregar($mensaje)) {
            // Mensaje de éxito
            $_SESSION['toast_message'] = "Tu mensaje se envió correctamente";
            $_SESSION['toast_type'] = "success";
        } else {
            // Mensaje de error
            $_SESSION['toast_message'] = "Tu mensaje no se envió";
            $_SESSION['toast_type'] = "error";
        }
    }catch(Exception $e){
        $_SESSION['toast_message'] = $e->getMessage();
            $_SESSION['toast_type'] = "error";
    }

    // Redirige a noticias.php
    header("Location: " . BASE_URL . "/Views/contacto.php");
    exit();
}
?>