<?php
require_once 'Models/MediaModel.php';

class MediaController{


 public function Mediaid(){
    $id=$_GET['id'];
    $Model = new MediaModel();
    $media=$Model->Get_media_id($id); 
     echo json_encode($media); 
 }

}