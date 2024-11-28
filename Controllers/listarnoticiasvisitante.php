<?php
require_once __DIR__ . "/../Models/noticia.php";
require_once __DIR__ . "/../routes.php";
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $noticia = new Noticia();
    $noticias = $noticia->listar_recientes();
    echo json_encode($noticias);
}

?>