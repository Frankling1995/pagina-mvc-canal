<?php 

class Model {

 public  $pdo;

    public function __CONSTRUCT()
	{
		try
		{
			$this->pdo = new PDO('mysql:host=localhost;dbname=posts', 'root', '');
			$this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);	
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
    }
        

    
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