<?php   

require_once 'Model.php';

class NoticiaModel extends Model{

//CAMPOS DE LA TABLA NOTICIA
    private $id;
    private $titulo;
    private $contenido;
    private $id_categoria;
    private $id_media;
    private $id_usuario;
    private $fecha;
//METODO GET Y SET 

public function _GET($k){ return $this->$k; }
public function _SET($k, $v){return $this->$k = $v;}

//SETEA EL OBJETO MODELO CON LOS VALORES CONTENIDOS EN $r
    public function Set_Object($r){
        
        $this->id = $r['id'];
        $this->titulo= $r['titulo'];
        $this->contenido = $r['contenido'];
        $this->id_categoria = $r['id_categoria'];
        $this->id_media = $r['id_media'];
        $this->id_usuario= $r['id_usuario'];
        $this->fecha= $r['fecha'];
    }

//METODO CREATE 
    public  function Guardar ( ){
        $sql="INSERT INTO noticia (titulo,contenido,id_categoria,id_media,id_usuario,fecha) VALUES (?,?,?,?,?,?)";
        try {
            $stm= $this->pdo->prepare($sql);
            $stm->execute(array(
                $this->titulo,
                $this->contenido,
                $this->id_categoria,
                $this->id_media,
                $this->id_usuario,
                $this->fecha 
            ));
        
            return "Noticia  " .$this->titulo." agregada"; 
        } catch (Exception $e) {
            return "Error SQL " .$e;
        }
    }

//METODO READ ALL
    public function Get_all_noticias() {
        $sql = "SELECT n.Titulo, n.Contenido , c.categoria, u.fullname ,n.fecha, m.url_media\n"
        . " AS principal "
        . " FROM noticia AS n"
        . " INNER JOIN categoria AS c  ON n.id_categoria=c.id"
        . " INNER JOIN usuario AS u ON n.id_usuario=u.id"
        . " INNER JOIN noticia_media AS nm ON  n.id_media=nm.id_noti_media "
        . " INNER JOIN media As m ON nm.media=m.id  ORDER BY n.fecha DESC";
        try {
            $stm= $this->pdo->prepare($sql);
            $stm->execute();
            $r=$stm->fetchAll(PDO::FETCH_OBJ);
            return $r; 
        } catch (Exception $e) {
            return "Error SQL " .$e;
        }
    }
//METODO UPDATE 
    public function  Actualizar(){
        $sql="UPDATE noticia SET titulo=?,contenido=?,id_categoria=?,id_usuario=?,fecha=?
        WHERE id =?";
        try {
            $stm= $this->pdo->prepare($sql);
            $stm->execute(array(
                $this->titulo,
                $this->contenido,
                $this->id_categoria,
                $this->id_media,
                $this->id_usuario,
                $this->fecha,
                $this->id
            ));
            
        } catch (Exception $e) {
            return "Error SQL " .$e;
        }


    }
//METODO DELETE 

    public function  Eliminar(){
        $sql="DELETE  FROM  noticia WHERE id= ?";
        try {
            $stm=$this->pdo->prepare($sql);
            $stm->execute(array($this->$id));
            return "nnoticia eliminida satisfactoriamente";
        } catch (Exception $e) {
            return " error en la consulta ";
        }


    }



//SEIS NOTICIAS PRINCIPAL

    public function  noticia_principal (){
        $sql = "SELECT n.id,  n.Titulo, n.Contenido , n.fecha, m.url_media AS principal 
            FROM noticia AS n 
            INNER JOIN noticia_media AS nm ON n.id_media=nm.id_noti_media 
            INNER JOIN media As m ON nm.media=m.id ORDER BY n.fecha DESC
            LIMIT 6
            ";
     
        try {
            $stm= $this->pdo->prepare($sql);
            $stm->execute();
            $r=$stm->fetchAll(PDO::FETCH_OBJ);
            return $r; 
        } catch (Exception $e) {
            return "Error SQL " .$e;
        }
    
}

//  NOTICIA UNICA
    
    public function Get_noticia($id){
        $sql = "SELECT n.Titulo, n.Contenido , c.categoria, u.fullname ,n.fecha, m.url_media\n"
        . " AS principal ,ms.url_media As secundaria , mt.url_media As media3"
        . " FROM noticia AS n"
        . " INNER JOIN categoria AS c  ON n.id_categoria=c.id"
        . " INNER JOIN usuario AS u ON n.id_usuario=u.id"
        . " INNER JOIN noticia_media AS nm ON  n.id_media=nm.id_noti_media "
        . " INNER JOIN media As m ON nm.media=m.id"
        . " INNER JOIN media AS ms ON nm.media_2= ms.id "
        . " INNER JOIN  media AS mt ON nm.media_3=mt.id WHERE n.id = ?";
        try {
            $stm= $this->pdo->prepare($sql);
            $stm->execute(array($id));
            $r=$stm->fetch(PDO::FETCH_OBJ);
            return $r; 
        } catch (Exception $e) {
            return "Error SQL " .$e;
        }
    }

}

