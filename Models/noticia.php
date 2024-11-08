<?php
include "dbconfig.php";

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
        echo '<div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
          <div class="card-item">
            <div class="card-body p-0 mt-2">
              <span class="text-capitalize text-black-50">' . $noticia['fecha_not'] . '</span>
              <h5 class="mt-2">
                <a href="index.html">'.$noticia['titulo_not'].'</a>
              </h5>
              <p>'.$noticia['descripcion_not'].' <span><a href="index.html" class="text-decoration-underline fst-italic">Leer Más</a></span> </p>
            </div>
          </div>
        </div>';   
    }
}

public function listar_recientes(){
    $noticias = ORM::for_table('noticias')->order_by_desc('fecha_not')->find_result_set();
    $con = 0;
    foreach($noticias as $noticia){
        // retorna una tarjeta de bootstrap
        if($con < 4){
        echo '<div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
          <div class="card-item">
            <div class="card-body p-0 mt-2">
              <span class="text-capitalize text-black-50">' . $noticia['fecha_not'] . '</span>
              <h5 class="mt-2">
                <a href="index.html">'.$noticia['titulo_not'].'</a>
              </h5>
              <p>'.$noticia['descripcion_not'].' <span><a href="index.html" class="text-decoration-underline fst-italic">Leer Más</a></span> </p>
            </div>
          </div>
        </div>';
        }   
        $con++;
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