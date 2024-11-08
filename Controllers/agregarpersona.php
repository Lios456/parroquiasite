<?php
include __DIR__ . "/../Models/persona.php";
include __DIR__ . "/../routes.php";
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $persona = new Persona();
    $persona->cedula = $_POST["cedula"];
    $persona->nombre = $_POST["nombre"];
    $persona->apellido1 = $_POST["apellido1"];
    $persona->apellido2 = $_POST["apellido2"];
    $persona->celular = $_POST["celular"];

    try{
        if ($persona->registrar($persona)) {
            // Mensaje de éxito
            $_SESSION['toast_message'] = "Éxito al registrar la persona";
            $_SESSION['toast_type'] = "success";
        } else {
            // Mensaje de error
            $_SESSION['toast_message'] = "Fallo al registrar la persona";
            $_SESSION['toast_type'] = "error";
        }
    }catch(Exception $e){
        $_SESSION['toast_message'] = $e->getMessage();
            $_SESSION['toast_type'] = "error";
    }

    // Redirige a noticias.php
    header("Location: " . BASE_URL . "/Views/registropersonas.php    ");
    exit();
}
?>
