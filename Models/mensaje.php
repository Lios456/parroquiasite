<?php
include __DIR__ . '/../dbconfig.php';
class Mensaje {
    public $id;
    public $name;
    public $email;
    public $phone;
    public $address;
    public $message;

    public function agregar($data){
        $mensaje = ORM::forTable('mensajes')->create();
        $mensaje->name = $data->name;
        $mensaje->email = $data->email;
        $mensaje->phone = $data->phone;
        $mensaje->address = $data->address;
        $mensaje->message = $data->message;
        $mensaje->save();
        return true;    
    }

    public function listar(){
        $mensajes = ORM::forTable('mensajes')->select_many()->asArray();
    }
}
?>