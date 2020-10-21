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


    }

    

}