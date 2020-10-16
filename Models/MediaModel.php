<?php
require_once 'Model.php';

class MediaModel extends Model {

    private $id;
    private $url_media;
    private $tipo;

    public function __GET($k){ return $this->$k; }
    public function __SET($k, $v){return $this->$k = $v;}

    public function Set_Object($r){
        $this->id=$r->id; 
        $this->url_media = $r->url_media;
        $this->tipo= $r->tipo;
    }

    public function Get_media_id($id){
        $sql="SELECT * FROM media WHERE id=? ";
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
			return 'Error en el sql';
		}
    }

    public function Get_all_media(){
    $sql="SELECT * FROM media  ";
    
    try {
        $stm= $this->pdo
                        ->prepare($sql);
    } catch (Exception $e) {
           //throw $th;
    } 
    }

}