<?php 

//MODELO BASE 

class Model {

	public  $pdo;

//EL METODO CONTRUCTOR CREA LA CONEXION CON LA BASE DE DATOS LA 
	//SERA HEREDADO POR TODO LOS MODELOS LOS DE MAS MODELOS 
    public function __CONSTRUCT()
	{
		try
		{
			
			$this->pdo = new PDO('mysql:host=localhost;dbname=canal', 'root', '');
			$this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);	
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
    }
        

//METODO DE LA CONSULTA COMPLETA LA CUAL ES RECURRENTE EN TODOS LOS MODELOS 
    public function Get_all($table){
        
        try
		{
			$stm = $this->pdo->prepare("SELECT * FROM ".$table."" );
			$stm->execute();
			return $stm->fetchAll(PDO::FETCH_OBJ);
			}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
        
    }

    

}