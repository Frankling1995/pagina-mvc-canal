<?php

require_once 'Models.php';


class UsuarioModdel extends Model{

    private $id ;
    private $username;
    private $password;
    private $id_rol;
    private $fullname;

    public function Get_username($username){
        $sql= "SELECT * FROM usuario WHERE  username=?";
        try {
            $stm= $this->pdo->prepare($sql);

        } catch (Exception $e) {
            return "Error SQL ";
        }
        

    }



}