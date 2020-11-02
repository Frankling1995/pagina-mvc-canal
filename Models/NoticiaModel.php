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
        $sql="SELECT  titulo, contenido, categoria , url_media, fullname, fecha  ";
    

    








}

}