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
//SETEA EL OBJETO MODELO CON LOS VALORES CONTENIDOS EN $r
public function Set_Object($r){
    $this->id_noti_media = $r['id_noti_media'];    
    $this->media = $r['media'];
    $this->media_2= $r['media_2'];
    $this->media_3= $r['media_3'];
}

//METODO CREATE 

    public function Guardar(){
        $sql="INSERT INTO noticia_media (media,media_2,media_2) VALUES ?,?,?";
        try {
            $stm=$this->pdo->prepare($sql)
            ->execute(
            array(
                $this->media,
                $this->media_2,
                $this->media_3
            ));
           return $this->id= $this->pdo->lastInsertId();
        } catch (Exception $e) {
            return 'Error en el sql ' .$e ;
        }
    



    





}
//METODO UPDATE
    public function  Actualizartodos(){
        $sql="UPDATE  noticia_media SET media=? ,media_2=? ,media_3=?  WHERE id_noti_media =?";
        $stm= $this->pdo->prepare($sql)
        ->execute(array(
            $this->media,
            $this->media_2,
            $this->media_3,
            $this->id_noti_media
        ));
        
    }
}