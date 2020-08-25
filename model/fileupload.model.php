<?php
include_once 'connection.model.php';

class uploadModel extends connection{

public function file_details($filename,$size){

    $query= "INSERT INTO files VALUES ('$filename','$size')";
    $result=$this->runQuery($query);
    return $result;      
}
}
?>