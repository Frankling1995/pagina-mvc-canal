<?php 


class AdminController{

    public function login(){
        echo 'login';
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
        UsuarioController::Login();
        AdminController::Principal();
    }

    public function LOGOUT(){
        session_unset ();
        session_destroy();
        
        header('location:'.LOGING);
    }

    

    

}