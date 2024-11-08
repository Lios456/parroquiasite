<?php
include __DIR__ . "/../Models/noticia.php";
include __DIR__ . "/../routes.php";
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $noticia = new Noticia();
    $noticia->titulo = $_POST["titulo"] ?? null;
    $noticia->detalle = $_POST["detalle"] ?? null;
    $noticia->fecha = date("Y-m-d");
    //$noticia->autor = $_POST["autor"] ?? null;

    try{
        if ($noticia->insertar($noticia)) {
            $_SESSION['toast_message'] = "La noticia fue registrada correctamente";
            $_SESSION['toast_type'] = "success";
        } else {
            $_SESSION['toast_message'] = "La noticia no fue registrada";
            $_SESSION['toast_type'] = "error";
        }
    }catch(Exception $e){
        $_SESSION['toast_message'] = $e->getMessage();
            $_SESSION['toast_type'] = "error";
    }
    header("Location: " . BASE_URL . "/Views/noticias.php");
    exit();
}

?>
