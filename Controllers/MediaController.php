<?php
require_once 'Models/MediaModel.php';

class MediaController{


    public function Mediaid(){
    $id=$_GET['id'];
    $Model = new MediaModel();
    $respuesta=$Model->Get_media_id($id); 
    if ($respuesta!=false) {
        echo json_encode($respuesta); 
    } else {
        echo json_encode($respuesta=[
            'response'=>'Dato no encontrado',
            'Estado'=>'error'
        ]); 
    }
    
    }

    public function Medias(){
        
        $Model = new MediaModel();
        $media=$Model->Get_all('media'); 
        echo json_encode($media); 
        }
    
    public function guardar(){
        $Model = new MediaModel();
        $Model->Set_Object($formData=[
            'url_media'=>'prueba4.jpg',
            'tipo'=>'imagen'
        ]);
        $Model->Guardar();
    }
    
    //BORRAR MEDIA 
    public function borrar(){
        $id=$_GET['id'];
        $Model= new MediaModel();
        $respuesta=$Model->Eliminar($id);
        echo json_encode($rs=[
            'response'=>$respuesta,
            'Estado'=>'Correcto'
        ]);
    }

}