<?php
require_once 'Model.php';

class MediaModel extends Model{

    private $id;
    private $url_media;
    private $tipo;

    public function __GET($k){ return $this->$k; }
    public function __SET($k, $v){return $this->$k = $v;}

    public function Set_Object($r){

    }

    public function Get_media_id($id){
        try 
		{
			$stm = $this->pdo
                      ->prepare("SELECT * FROM media WHERE id=? ");
			$stm->execute(array($id));
			$r = $stm->fetch(PDO::FETCH_OBJ);            
            return $r;
        } 
        catch (Exception $e) 
		{
			die($e->getMessage());
		}
    }
}