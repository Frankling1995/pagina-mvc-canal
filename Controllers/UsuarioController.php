<?php
require_once 'Models/UsuarioModel.php';

class UsuarioController {

//METODO REGISTRAR 

    public function registrar(){

    $url_actual = "http://" . $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"];
        
        if ($url_actual===REGISTRO) {
            $password="editor";
            $hash=password_hash($password,PASSWORD_BCRYPT);
            $Usuario = new UsuarioModel();
            $Usuario->Set_Object(array(
                    'id'=>'',
                    'username'=>'editor2',
                    'password'=>$hash,
                    'id_rol'=>2,
                    'fullname'=>'editor2'
                ));
            $respuesta=$Usuario->Guardar();
            echo $respuesta;
        
            } else {
                echo "No puedes acceder a esta ruta";
            }
            
        

    }

    public function Usuarios(){
        
        $Usuario= new UsuarioModel();
        $Usuarios=$Usuario->Get_usuarios('usuario'); 
        echo json_encode($Usuarios); 



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