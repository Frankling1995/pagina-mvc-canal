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





//METODO CREATE 
    public  function Guardar(){
        $sql='INSERT INTO programa (programa,descripcion,hora_incio,hora_final,id_media ) VALUES (?,?,?,?,? )';
        
        try {
            $stm=$this->pdo->prepare($sql)
            ->execute(array(
            $this->programa,
            $this->descripcion,
            $this->hora_incio,
            $this->hora_final,
            $this->id_media

        ));
        return 'Programa Agregado';

        } catch (Exception $e) {
            
            return 'Error en SQL  ' .$e ;
            
        }

    }
//METEDO READ TODOS LOS ELEMENTOS  

    public function  Get_all_programa(){
        $sql="SELECT programa.id , programa , descripcion , hora_inicio, hora_final, url_media ";
        $sql.="FROM programa ";
        $sql.=" INNER JOIN media ";
        $sql.=" ON programa.id_media = media.id ";
        try {
            $stm= $this->pdo->prepare($sql);
            $stm->execute();
            $r=$stm->fetchAll(PDO::FETCH_OBJ);
            return $r;         
            
        } catch (Exception $e) {             
            return 'Error en SQL  ' .$e ;
            
        }


    }
//METODO UPDATE 
    public function  Actualizar(){
    $sql="UPDATE programa SET programa=?, descripcion=?, hora_incio=?, hora_final=? ,id_media=?  WHERE id =?";

        try {
            $stm= $this->pdo->prepare($sql)
            ->execute(array(
                $this->programa,
                $this->descripcion,
                $this->hora_incio,
                $this->hora_final,
                $this->id_media,
                $this->id
            ));

            return "los Datos del programa ".$this->Programa." actualizados";
        
        } catch (Exception $e) {
        
            return "Error SQL ".$e;

    }
    }
//METODO DELETE 

    public function  Eliminar(){
        $sql="DELETE  FROM  programa WHERE id=?";
        try {
            $stm=$this->pdo->prepare($sql)
            ->execute(array(
                $this->id
            )); 
          
        } catch (Exception $e) {
            return "Error SQL ".$e;
        }

    }

//METODO READ POR UN SOLO REGISTRO SEGUN EL CAMPO PROGRAMA 

     public function  Get_programa($programa){
        $sql="SELECT programa.id , programa , descripcion , hora_inicio, hora_final, url_media ";
        $sql.="FROM programa ";
        $sql.=" INNER JOIN media ";
        $sql.=" ON programa.id_media = media.id ";
        $sql.=" WHERE programa=? ";
        try {
            $stm= $this->pdo->prepare($sql);
            $stm->execute(array($programa));
            $r=$stm->fetchAll(PDO::FETCH_OBJ);
            return $r;         
            
        } catch (Exception $e) {             
            return 'Error en SQL  ' .$e ;
            
        }


     }

}