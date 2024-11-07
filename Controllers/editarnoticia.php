<?php
include ('../Models/noticia.php');

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $noticia = ORM::forTable("noticias")->find_one($_POST['id_not']);
    

}


?>