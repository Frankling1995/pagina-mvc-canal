<?php
require_once 'Model.php';

class MediaModel extends Model {

    private $id;
    private $url_media;
    private $tipo;

    public function __GET($k){ return $this->$k; }
    public function __SET($k, $v){return $this->$k = $v;}

//SETEA EL OBJETE MODELO CON LOS VALORES CONTENIDOS EN $r
    public function Set_Object($r){
        
        $this->url_media = $r['url_media'];
        $this->tipo= $r['tipo'];
    }
//CONSULTA UN UNICO REGISTRO SEGUN UN ID DADO 
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

//METODO INSERT 

    public function Guardar(){
        
        $sql= "INSERT INTO media (url_media,tipo) VALUES (?,?)";
        try {
            $stm=$this->pdo->prepare($sql)
            ->execute(
            array(
                $this->url_media,
                $this->tipo,
            ));
        } catch (Exception $e) {
            return 'Error en el sql';
        }


    }

}