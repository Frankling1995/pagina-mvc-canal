<?php
require_once 'Models/UsuarioModel.php';

class UsuarioController {

//METODO REGISTRAR 

    public function registrar(){

    $password="admin";
        $hash=password_hash($password,PASSWORD_BCRYPT);
     
        $Usuario = new UsuarioModel();

        $Usuario->Set_Object(array(
            'id'=>'',
            'username'=>'admin',
            'password'=>$hash,
            'id_rol'=>1,
            'fullname'=>'Administrador'
        ));

        $respuesta=$Usuario->Guardar();

        echo $respuesta;


    }

    public function test (){

        $re='admin';
        $Usuario = new UsuarioModel();
        $r=$Usuario->Get_username('admin');

        if(password_verify($re,$r->password)){
        
            echo "funciona contraseña";
        }
        
    }



}