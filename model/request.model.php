<?php
include_once 'connection.model.php';

class request extends connection {
    
    //private $table;
    //private $username;
    
    public function checkOccupation($id){
        
        $query= "SELECT * FROM userdetails WHERE ID='$id'";
        $result=$this->runQuery($query);
                
        return $result;
    }

    public function checkQulification($var){

        $query= "SELECT * FROM requesttypes WHERE requestId='$var'";
        $result=$this->runQuery($query);
                
        return $result;
    }

    public function getLastvalue(){

        $query="select * from requestslist ORDER BY requestNo DESC LIMIT 1";
        $result=$this->runQuery($query);
                
        return $result;
    }

    public function putRequsts($var,$id,$newNo){
        $datime = date("Y-m-d")." ".date("h:i:s");
        $query= "INSERT INTO requestslist VALUES('$newNo','$var','$id','$datime','new','')";
        $result=$this->runQuery($query);
                
        return $result;
    }
}

?>

