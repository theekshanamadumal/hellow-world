<?php
include_once 'connection.model.php';

class fileUplpoadModel extends connection{
    
public function uploadFile($recordType,$recordName,$userId)
{
    $query= "INSERT INTO records(recordType,recordName,userId) VALUES ('$recordType','$recordName','$userId')";
    $result=$this->runQuery($query);
    return $result;  
    
}

}

?>
