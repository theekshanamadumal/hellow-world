<?php
include_once 'connection.model.php';

class login extends connection {
    
    private $table;
    private $username;
    
    public function checkPassword($table,$username){
        
        $this->table=$table;
        $this->username=$username;

        $query= "SELECT * FROM $this->table WHERE ID='{$this->username}'";
        $result=$this->runQuery($query);
                
        return $result;
    }
}

?>