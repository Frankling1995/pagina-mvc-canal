<?php 
 require_once 'Models/UsuarioModel.php';

class AdminController{

    public function login(){
        require_once 'Views/Admin/Login.php';
    } 

    public function Usuarios(){

        require_once 'Views/Admin/Usuarios.php';



    }

    public function Registro(){

        UsuarioController::registrar();

    }

    public function Principal(){

        require_once 'Views/Admin/Principal.php';

    }

    public function Validacion(){
        $Usuario= new UsuarioModel();
         $username =$_POST['username'];
         $password=$_POST['password'];
        /* 
         $username ='admin';
         $password='admin';*/
 
        if (isset($username)) {
            $Usuario=$Usuario->Get_username($username);
            if ($Usuario) {
                if (password_verify($password,$Usuario->password)){
                       
                    $_SESSION['inciado']=true;
                    $_SESSION['rol']=$Usuario->rol;
                    
                    header('location:'. PRINCIPAL);
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

    public function LOGOUT(){
        session_unset ();
        session_destroy();
        
        header('location:'.LOGING);
    }

    

    

}