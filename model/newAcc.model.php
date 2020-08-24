<?php
include_once 'connection.model.php';

class newAaccModel extends connection {
    
    private $table;
    private $username;
    
    public function runIdQuery($ID)
    {
        $query_id= "SELECT ID FROM userdetails WHERE ID='{$ID}'";  
        return $this->runQuery($query_id);
    }

    public function insertUserDetails($ID,$first_name,$second_name,$address,$telephone,$email,$school,$occupation)
    {
        $query_user="INSERT INTO userdetails VALUES(
            '{$ID}',
            '{$first_name}',
            '{$second_name}',
            '{$address}',
            '{$telephone}',
            '{$email}',
            '{$school}',
            '{$occupation}')";  

        return $this->runQuery($query_user);
        
    }
    public function insertPasswordDetails($ID,$pswrd)
    {
        $query_password="INSERT INTO passwords 
        VALUES('{$ID}','{$pswrd}')";   
        
        return $this->runQuery($query_password);
    }
}

?>