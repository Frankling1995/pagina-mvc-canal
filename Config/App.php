<?php


Class App {

    public function Router (){
        if(!isset($_REQUEST['c'])){
        
           require_once'Views/Inicio.php';
        } 
        else {
            if ($_REQUEST['c']=="Admin") {
                $n_controller= $_GET['c'].'Controller';
                $controller= new $n_controller();
                if ($_REQUEST['a']=="") {
                    $accion='login';            
                } 
                else {$accion=$_REQUEST['a'];}
            } else {
                $n_controller= $_REQUEST['c'].'Controller';
                $controller= new $n_controller();
                if ($_REQUEST['a']=="") {
                    $accion='index';
                } else {$accion=$_REQUEST['a'];}
            }
            call_user_func( array( $controller, $accion) );
        }
    }

    public  function IsAdmin(){

        
    
    
    }




} 