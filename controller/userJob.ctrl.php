<?php
include_once 'model/userJob.model.php';
include_once 'model/statusChange.model.php';


class uiTableControl{

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

class uiButtonControl{
    public function finishButton($requestNo)
    {
        
        $statusChange= new statusChangeModel();
        $ans= $statusChange->  changeStatus($requestNo,"finished");
        //echo $statusChange->numRows($ans);
        return $ans;
               
    }
    public function resumeButton($requestNo)
    {
        $statusChange= new statusChangeModel();
        $ans= $statusChange->  changeStatus($requestNo,"ongoing");
        //echo $statusChange->numRows($ans);
        return $ans;
                
    }
    

}


?>