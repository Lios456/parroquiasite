<?php
include("dbconfig.php");

class Noticia{
    public $id;
    public $titulo;
    public $detalle;
    public $fecha;
    public $autor;
public function __construct(){
    //$total_noticias = ORM::for_table('noticias')->count();
    //echo '<h1>Actualmente hay ' . $total_noticias . ' noticias en la bdd</h1>';
}


public function insertar($data){
    $noticia = ORM::for_table('noticias')->create();
    $noticia->titulo_not = $data->titulo;
    $noticia->descripcion_not = $data->detalle;

    $noticia->save();
    return true;
}

public function listar(){
    $noticias = ORM::for_table('noticias')->order_by_desc('fecha_not')->find_array();
    foreach($noticias as $noticia){
        // retorna una tarjeta de bootstrap
        echo '<center><div class="card w-50"> <div class="card-body">' . 
        '<h5 class="card-title">' . $noticia['titulo_not'] . '</h5>'.
        '<p class="card-text">'. $noticia['descripcion_not'] . '</p>'.
        '<p class="card-text">Fecha:  ' . $noticia['fecha_not'] . '</p>'.
        '</div></div></center>';   
    }
}

/**
 * Se actualizan los datos de la noticia
 * @param Noticia $data
 * @return bool
 */
public function actualizar($data){
    $noticia = ORM::for_table('noticias')->find_one(($data->id));
    $noticia->titulo_not = $data->titulo;
    $noticia->descripcion_not = $data->detalle;
    $noticia->save();

    return true;

}

public function eliminar($data){
    $noticia = ORM::for_table('noticias')->find_one(($data->id));
    $noticia->delete();
    return true;
}


}
?>