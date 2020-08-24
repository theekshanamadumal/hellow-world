<?php
include_once 'connection.model.php';
class changePasswordModel extends connection
{
    public function getData($id){

        $query=  "SELECT ID,Email FROM userdetails WHERE ID='{$id}'";

        return $this->runQuery($query);
    } 

    public function fetchData($result)
    {
        $details=$this->fetchAssoc($result);
        $emailo=$details['Email'];
        $ido =$details['ID'];

    }

}
?>