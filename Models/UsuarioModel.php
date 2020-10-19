<?php

require_once 'Models.php';


class UsuarioModdel extends Model{

    private $id ;
    private $username;
    private $password;
    private $id_rol;
    private $fullname;

//METODO CREATE 

    public function Guardar(){
        $sql="INSERT INTO  usuario (username,password,id_rol, fullname) VALUES (?,?,?,?) ";
        
        try {
            //code...
        } catch (Exception $e) {
            //throw $th;
        }
        

    }

//METODO READ SEGUN UN USERNAME    
    public function Get_username($username){
        $sql= "SELECT username, password, rol ,fullname  FROM usuario WHERE  username=?";
        try {
            $stm= $this->pdo->prepare($sql);
            $stm->execute(array($username));
            $r=$stm->fetch(PDO::FETCH_OBJ);
            return $r;

        } catch (Exception $e) {
            return "Error SQL ";
        }
        

    }



}