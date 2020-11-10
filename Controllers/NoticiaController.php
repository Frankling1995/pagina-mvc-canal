<?php
require_once 'Models/NoticiaModel.php';
require_once 'Models/NoticiamediaModel.php';
require_once 'MediaController.php';

class NoticiaController {


    public function noticia(){

        require_once 'Views/noticia/noticia.php';
    }

    public function NoticiasP(){
        $Model= new NoticiaModel();
        $noticiasp= $Model->noticia_principal();
         echo json_encode ($noticiasp); 

    }
    public function Noticiadata(){
        $id=$_GET['id'];
        $Model= new NoticiaModel();
        $noticia= $Model->Get_noticia($id);
         echo json_encode ($noticia); 


    }
}