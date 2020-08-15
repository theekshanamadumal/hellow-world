<?php
include_once 'connection.model.php';

class login extends connection {
    
    private $table;
    private $username;
    
    public function checkPassword($table,$username){
        
        $this->table=$table;
        $this->username=$username;

        $query= "SELECT * FROM $this->table WHERE ID='{$this->username}'";
        $connection=$this->connect();
        $result= mysqli_query($connection,$query);
        
        return $result;
    }

    public function fetchAssoc($result){
    
        $details=mysqli_fetch_assoc($result);
        return $details;

    }

}

?>