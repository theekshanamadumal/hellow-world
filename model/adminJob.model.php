<?php
include_once 'connection.model.php';
class adModel extends connection
{
    public function getRequestHistory($var){

        $query= "SELECT requestslist.requestNo,requestslist.requestId,requestslist.userId,requestslist.description,requesttypes.details FROM requestslist NATURAL JOIN requesttypes WHERE   status='$var'";

        return $this->runQuery($query);
    }
    
    

}


?>