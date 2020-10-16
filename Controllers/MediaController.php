<?php
require_once 'Models/MediaModel.php';

class MediaController{

//MUESTRA LA MEDIA INDICA POR EL ID
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

//RETORNA TODOS LAS MEDIAS CONTENIDAS EN LA BASE DATOS
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

    public function actualizar(){
        $id=1;
        $Model = new MediaModel();
        $Model->Set_Object($formData=[
            'url_media'=>'prueba1.jpg',
            'tipo'=>'imagen'
        ]);

        $Model->_SET('id',$id);

        $respuesta=$Model->Actualizar();
        echo json_encode($rs=[
            'response'=>$respuesta,
            'Estado'=>'Correcto'
        ]);

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