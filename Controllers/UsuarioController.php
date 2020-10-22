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
//TODOS LOS USUARIOS
    public function Usuarios(){
        $Usuario= new UsuarioModel();
        if ($_GET['rol']) {
            $rol=$_GET['rol'];           
            $Usuarios=$Usuario->Get_ALL_rol($rol); 
            echo json_encode($Usuarios);
        } elseif ($_GET['user']) {
            $user=$_GET['user'];            
            $Usuarios=$Usuario->Get_username($user); 
            echo json_encode($Usuarios); 
        }else{
            $Usuarios=$Usuario->Get_usuarios(); 
            echo json_encode($Usuarios); 

        }
        
        



    }






}