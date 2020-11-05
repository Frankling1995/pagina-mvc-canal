<?php
require_once 'Model.php';

class NoticiamediaModel extends Model {
    private $id_noti_media;
    private $media;
    private $media_2;
    private $media_3;

//METODO GET Y SET 

    public function _GET($k){ return $this->$k; }
    public function _SET($k, $v){return $this->$k = $v;}





}