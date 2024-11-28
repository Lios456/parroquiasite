<?php
require_once __DIR__ . "/../Models/noticia.php";

if($_SERVER['REQUEST_METHOD'] == "GET"){
    $noti = new Noticia();
    $not = $noti->listar_noticia($_GET["id"]);
    if(count($not) != 0 ){
        echo json_encode($not);
    }else{
        echo json_encode(["Error" => "No hay noticias con ese id"]);
    }
    
}


?>