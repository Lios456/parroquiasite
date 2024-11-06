<?php
include 'idiorm/idiorm.php';

ORM::configure('mysql:host=localhost;dbname=parroquia');
ORM::configure('username', 'root');
ORM::configure('password', '');
class Noticia extends ORM{
    public $titulo;
    public $detalle;
    public $fecha;
    public $autor;
public function __construct(){
    $total_noticias = ORM::for_table('noticias')->count();
    echo '<h1>Actualmente hay ' . $total_noticias . ' noticias en la bdd</h1>';
}

public function insertar($data){
    $noticia = ORM::for_table('noticias')->create();
    $noticia->titulo_not = $data['titulo'];
    $noticia->descripcion_not = $data['descripcion'];
    $noticia->save();
    return true;
}

public function listar(){
    $noticias = ORM::for_table('noticias')->find_array();
    foreach($noticias as $noticia){
        echo '<div class="card w-50"> <div class="card-body">' . 
        '<h5 class="card-title">' . $noticia['titulo_not'] . '</h5>'.
        '<p class="card-text">'. $noticia['descripcion_not'] . '</p>'.
        '</div></div>';   
    }
}
}
?>