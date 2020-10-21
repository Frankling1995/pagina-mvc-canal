<?php

require_once 'Model.php';


class UsuarioModel extends Model{

    private $id;
    private $username;
    private $password;
    private $id_rol;
    private $fullname;

//SETEAR EL OBJETO 
    public function Set_Object($r){
        $this->id=$r['id'];
        $this->username=$r['username'];
        $this->password=$r['password'];
        $this->id_rol=$r['id_rol'];
        $this->fullname=$r['fullname'];

        
    }

//METODO CREATE 

    public function Guardar(){
        $sql="INSERT INTO  usuario (username,password,id_rol, fullname) VALUES (?,?,?,?) ";
        
        try {
            $stm=$this->pdo->prepare($sql)->execute(array(
                $this->username,
                $this->password,
                $this->id_rol,
                $this->fullname
            ));

            return "Datos agregados";
        } catch (Exception $e) {
        
            return $e;
        }
        

    }

//METODO READ SEGUN UN USERNAME    
    public function Get_username($username){
        $sql= "SELECT username, password, rol ,fullname ";
        $sql.=" FROM usuario ";
        $sql.=" INNER JOIN rol ";
        $sql.=" ON usuario.id_rol = rol.id ";
        $sql.=" WHERE  username=? ";
        try {
            $stm= $this->pdo->prepare($sql);
            $stm->execute(array($username));
            $r=$stm->fetch(PDO::FETCH_OBJ);
            return $r;

        } catch (Exception $e) {
            return "Error SQL ";
        }
        

    }


//METODO READ ALL

public function Get_usuarios(){
    $sql= "SELECT username,  rol ,fullname ";
    $sql.=" FROM usuario ";
    $sql.=" INNER JOIN rol ";
    $sql.=" ON usuario.id_rol = rol.id ";
    try {
        $stm= $this->pdo->prepare($sql);
        $stm->execute();
        $r=$stm->fetchAll(PDO::FETCH_OBJ);
        return $r;

    } catch (Exception $e) {
        return "Error SQL ";
    }
    

}



}