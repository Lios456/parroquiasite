<?php
include 'librerias/idiorm/idiorm.php';
include '../dbconfig.php';
class Persona extends ORM{
    public $cedula;
    public $nombre;
    public $apellido1;
    public $apellido2;
    public $celular;
    public $imagen;

    public function __construct(){

    }

    public function registrar($data) {
        $persona = ORM::for_table('persona')->create();
        $persona->cedula_per = $data->cedula;
        $persona->nombre_per = $data->nombre;
        $persona->apellido1_per = $data->apellido1;
        $persona->apellido2_per = $data->apellido2;
        $persona->celular_per = $data->celular;
        $persona->imagen_per = $data->imagen;
        $persona->save();
        return true;
    }

    public function listar($data){
        $personas = ORM::for_table('persona')->order_by_desc('apellido1_per')->findArray();
        foreach($personas as $persona){
            echo $persona->nombre_per;
            echo $persona->apellido1_per;
            echo $persona->apellido2_per;
            echo $persona->celular_per;

        }
    }
    
}

?>