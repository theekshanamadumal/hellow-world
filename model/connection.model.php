<?php

class connection{

    private $host = "localhost";
    private $user = "root";
    private $pwd = "";
    private $dbName = "deon";

    public function connect(){
       
        $connection = mysqli_connect($this->host,$this->user,$this->pwd,$this->dbName);
        //$dsn ='mysql:host={$this->host};dbname={$this->dbName}';
        //$pdo = new PDO($dsn,$this->user,$this->pwd)  ;
        //$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
        //return $pdo ;
        return $connection;
    }

    public function executeQuery($query){
        $preperation= $this->prepareQuery($query);
        return $preperation->execute();
        
    }


    public function prepareQuery($query){
        $connection= $this->connect();
        
        return $connection->prepare($query);
        
    }


    public function affectedRows($result){
        return $result->rowCount();
        
    }

    
    public function runQuery($query){
        $connection= $this->connect();
        return mysqli_query($connection,$query);
        
    }

    public function fetchAssoc($result){
    
        $details=mysqli_fetch_assoc($result);
        return $details;

    }

    public function numRows($mysqlResult)
    {
        return mysqli_num_rows($mysqlResult);
    }

}

?>
