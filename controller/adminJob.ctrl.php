<?php
include_once 'model/adminJob.model.php';
include_once 'model/statusChange.model.php';


class adminTableControl{

    public function requestHistory($var)
    {
        $adModel=new adModel();
        $result=$adModel->getRequestHistory($var);
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
    

}

class adButtonControl{
    public function proceedButton1($requestNo)
    {
        
        $statusChange= new statusChangeModel();
        return $statusChange->  changeStatus($requestNo,"ongoing");
        
    }

    public function proceedButton2($requestNo)
    {
        
        $statusChange= new statusChangeModel();
        return $statusChange->  changeStatus($requestNo,"pending");
        
    }
   

    public function CompleteButton($requestNo)
    {
        
        $statusChange= new statusChangeModel();
        return $statusChange->  changeStatus($requestNo,"completed");
        
    }

    public function FinishButton($requestNo)
    {
        
        $statusChange= new statusChangeModel();
        return $statusChange->  changeStatus($requestNo,"finished");
        
    }
    

}


?>