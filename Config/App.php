<?php


Class App {

    public function Router (){
        if(!isset($_REQUEST['c'])){
        
            require_once'Views/Inicio.php';
        } 
        else {
            switch ($_REQUEST['c']) {
                case 'Nosotros':
                    require_once'Views/nosotros.php';
                    break;
                
                case 'programacion':
                    require_once'Views/programacion/programacion.php';
                    break;    
                case 'noticias':
                    require_once'Views/noticia/noticias.php';
                    break; 
                case 'envivo':
                    require_once'Views/envivo.php';
                    break; 
                case 'contacto':
                    require_once'Views/contacto.php';
                    break; 
                
                default: if ($_REQUEST['c']=="Admin") {
                            $n_controller= $_GET['c'].'Controller';
                            $controller= new $n_controller();
                    
                            if ($_REQUEST['a']=="") {
                        
                            $accion='login';            
                            } 
                            else {$accion=$_REQUEST['a'];}
                        } 
                        else {
                            $n_controller= $_REQUEST['c'].'Controller';
                            $controller= new $n_controller();
                            if ($_REQUEST['a']=="") {
                            $accion='index';
                            } else {$accion=$_REQUEST['a'];}
                        }
                call_user_func( array( $controller, $accion) );
            
                break;  
            }
            }
    }

    public  function IsAdmin(){

        
    
    
    }

    public function Whitelist(){
        
    }



} 