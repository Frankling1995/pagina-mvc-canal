<?php
require_once 'Models/UsuarioModel.php';

class UsuarioController {   

//REGISTRAR USUARIO 

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
                echo json_encode(array(
                    'respuesta'=>$respuesta
                ));
            
                } else {
                    echo "No puedes acceder a esta ruta";
                }
                
        

    }
//TODOS LOS USUARIOS
    public function Usuarios(){
        $Usuario= new UsuarioModel();
        if (isset($_GET['rol'])) {
            $rol=$_GET['rol'];           
            $Usuarios=$Usuario->Get_ALL_rol($rol); 
            echo json_encode($Usuarios);
        } elseif (isset($_GET['user'])) {
            $user=$_GET['user'];            
            $Usuarios=$Usuario->Get_username($user); 
            echo json_encode($Usuarios); 
        }else{
            $Usuarios=$Usuario->Get_usuarios(); 
            echo json_encode($Usuarios); 

        }
        
        



    }

//ELIMINAR USUARIO

    public function Eliminar(){
    
        if (isset($_GET['id'])) {
            $id=$_GET['id'];
            $Usuario= new UsuarioModel();
            $Usuario->_SET('id',$id);
            $r=$Usuario->Eliminar();
            echo json_encode(array(
                'respuesta'=>$r
            ));
            } else {
                echo json_encode(array(
                    'respuesta'=>'no selecionaste ningun usuario'
                ));
            }
        
    }

//ACTUALIZAR USUARIO
    public function Actualizar (){
        
        if (isset($_GET['id'])) {
            $id=$_GET['id'];
            $password='juan';
            $hash=password_hash($password,PASSWORD_BCRYPT);
            $Usuario= new UsuarioModel();
            $Usuario->Set_Object($r=[
                'id'=>$id,
                'username'=>'juan',
                'password'=>$hash,
                'id_rol'=>2,
                'fullname'=>'juan'
            ]);
            $r=$Usuario->Actualizar();
            echo json_encode(array(
                'response'=>$r
            )); 
        } else {
            echo json_encode(array(
                'response'=>'No ha Seleccionado ningun Usuario'
            ));
        }
        
    }

    public function Login(){
        $Usuario= new UsuarioModel();
       /* $username =$_POST['username'];
        $password=$_POST['password'];*/

        $username ='admin';
        $password='admin';

        if (isset($username)) {
            $Usuario=$Usuario->Get_username($username);
            if ($Usuario) {
                if (password_verify($password,$Usuario->password)){
                    session_start();
                $_SESSION['admin']=true;
                $_SESSION['rol']=$Usuario->rol;
                 return $_SESSION;
                }else{
                    echo "contraseñan incorrecta";
                }
                
            }else{
                echo "usuario no registrado ";
            }
            
        } else {
            # code...
        }
        


    }
















}