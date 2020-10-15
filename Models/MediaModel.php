<?php
require_once 'Model.php';

class MediaModel extends Model{

    private $id;
    private $url_media;
    private $tipo;
    

    public function __GET($k){ return $this->$k; }
    public function __SET($k, $v){return $this->$k = $v;}


// ASIGNA LOS VALORES CONTENIDOS EN $r AL OBJETO MODEL
    public function Set_Object($r){

    }
    
//BUSCAR EL DATA REFERENCIADO POR EL ID   
    public function Get_media_id($id){
        $sql= "SELECT * FROM media WHERE id=? ";
        try 
		{
			$stm = $this->pdo
                      ->prepare($sql);
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