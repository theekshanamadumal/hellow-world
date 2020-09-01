<?php
include_once 'connection.model.php';

class uploadModel extends connection{

public function file_details($filename){

    $query= "INSERT INTO files VALUES ('$filename',)";
    $result=$this->runQuery($query);
    return $result;      
}
}

class fileUplpoadModel extends connection{
    
public function uploadFile($recordType,$recordName,$userId)
{
    $query= "INSERT INTO records VALUES ('$recordType'','$recordName','$userId')";
    $result=$this->runQuery($query);
    return $result;  
    
}

}

?>
