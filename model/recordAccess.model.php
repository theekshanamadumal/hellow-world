<?php
include_once 'connection.model.php';
class recordAccessModel extends connection
{
    public function getRecordHistory($loginId){

        $query= "SELECT recordNo recordType recordName FROM records WHERE userId='{$loginId}'
        ORDER BY recordNo";

        return $this->runQuery($query);
    }
    
    
}


?>