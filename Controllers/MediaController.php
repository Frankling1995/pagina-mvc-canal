<?php
require_once 'Models/MediaModel.php';

class MediaController{

    public $tabla_name='media';

    public function Mediaid(){
        $id=$_GET['id'];
        $Model = new MediaModel();
        $media=$Model->Get_media_id($id); 
        echo json_encode($media); 
    }

    public function Media_all(){
        $Model = new MediaModel();
        $media=$Model->Get_all($this->tabla_name); 
        echo json_encode($media); 

    }


}