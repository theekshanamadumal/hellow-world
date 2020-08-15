<?php
include_once 'connection.model.php';
class uiModel extends connection
{
    public function getRequestHistory($loginId){

        $query= "SELECT requestslist.requestNo,requestslist.status,requestslist.description
        ,requesttypes.details FROM requestslist JOIN requesttypes ON 
        requestslist.requestId=requesttypes.requestId WHERE userId='{$loginId}' 
        ORDER BY requestNo";

        return $this->runQuery($query);
    } 

}

?>