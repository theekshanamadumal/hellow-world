<?php
include_once 'model/userJob.model.php';

class uiControl{

    public function requestHistory($loginId)
    {
        $uiModel=new uiModel();
        $result=$uiModel->getRequestHistory($loginId);
        return $result;
    }

    public function hasJobsSubmitted($result)
    {
        if ($result-> num_rows > 0){
            return true;
        }
        else return false;
    }

    public function fetchData($result)
    {
        return $result-> fetch_assoc();
    }
    public function requestFinishedHistory($loginId)
    {
    $uiModel=new uiModel();
    $result=$uiModel->getFinishedHistory($loginId);
    return $result;
    }

}


?>