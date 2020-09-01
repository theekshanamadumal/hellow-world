<?php
include_once 'connection.model.php';

class statusChangeModel extends connection
{
    public function changeStatus($requestNo,$status){
        
       $query= "UPDATE requestslist SET status= {$status}
       WHERE requestNo={$requestNo}"  ; 
       
       
         
        return $this->runQuery($query);
        
    }


}