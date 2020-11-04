<?php   

require_once 'Model/Mode.php';

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

//SEIS NOTICIAS PRINCIPAL

    public function  noticia_principal(){
        $sql = "SELECT n.Titulo, n.Contenido , n.fecha, m.url_media";
        $sql.=" AS principal ,ms.url_media As secundaria , mt.url_media As media3";
        $sql.="FROM noticia AS n";
        $sql.="INNER JOIN noticia_media AS nm ON  n.id_media=nm.id_noti_media ";
        $sql.="INNER JOIN media As m ON nm.media=m.id";
        $sql.="ORDE BY n.fecha ASC LIMIT 6";





}

}

/*
        $sql = "SELECT n.Titulo, n.Contenido , c.categoria, u.fullname ,n.fecha, m.url_media";
        $sql.=" AS principal ,ms.url_media As secundaria , mt.url_media As media3";
        $sql.="FROM noticia AS n";
        $sql.="INNER JOIN categoria AS c  ON n.id_categoria=c.id";
        $sql.="INNER JOIN usuario AS u ON n.id_usuario=u.id";
        $sql.="INNER JOIN noticia_media AS nm ON  n.id_media=nm.id_noti_media ";
        $sql.="INNER JOIN media As m ON nm.media=m.id";
        $sql.="INNER JOIN media AS ms ON nm.media_2= ms.id ";
        $sql.="INNER JOIN  media AS mt ON nm.media_3=mt.id";
        $sql.="ORDE BY n.fecha ASC LIMIT 6";





*/