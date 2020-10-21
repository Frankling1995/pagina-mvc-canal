<?php
require_once 'Models/UsuarioModel.php';

class UsuarioController {

//METODO REGISTRAR 

    public function registrar(){

        $url_actual = "http://" . $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"];
            
            if ($url_actual===REGISTRO) {
                $password="jose";
                $hash=password_hash($password,PASSWORD_BCRYPT);
                $Usuario = new UsuarioModel();
                $Usuario->Set_Object(array(
                        'id'=>'',
                        'username'=>'jose',
                        'password'=>$hash,
                        'id_rol'=>2,
                        'fullname'=>'jose'
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





}