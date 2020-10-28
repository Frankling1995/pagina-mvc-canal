<?php 

require_once 'Models/Model.php';

class ProgramacionModel extends Model{

// CAMPOS DE LA TABLA PROGRAMA
    private $id ;
    private $programa;
    private $descripcion;
    private $hora_inicio;
    private $hora_final;
    private $id_media;

//METODO GET Y SET 
    public function _GET($k){ return $this->$k; }
    public function _SET($k, $v){return $this->$k = $v;}

//SETEA EL OBJETO MODELO CON LOS VALORES CONTENIDOS EN $r
    public function Set_Object($r){
        
        $this->programa = $r['programa'];
        $this->descripcion= $r['descripcion'];
        $this->hora_incio= $r['hora_inicio'];
        $this->hora_final= $r['hora_final'];
        $this->id_media= $r['id_media'];
    }





// METODO CREATE 
    public  function Guardar(){
        $sql='INSERT INTO programa (programa,descripcion,hora_incio,hora_final,id_media ) VALUES (?,?,?,?,? )';
        
        try {
           $stm=$this->pdo->prepare($sql)
           ->execute(array(
            $this->programa,
            $this->descripcion,
            $this->hora_incio,
            $this->hora_final,
            $this->id_media,

           ));

        } catch (Exception $e) {
            
        }

    }




}