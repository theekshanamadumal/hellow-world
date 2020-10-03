<?php

class changePassword{
    public $message;
    public $status;

    public function changePswd($id,$email)
    {
        
        if($this->checkDetails($id ,$email)){
            include_once 'model/changePassword.model.php';
            $changePswrdModel=new changePasswordModel();

            $result=$this->getData($id,$changePswrdModel);
            $message="UNDER CONSTRUCTION";
            $status="error";
            /*
            if($result){
                $details=$changePswrdModel->fetchData($result);
                
                if ($details['Email'] && $details['ID']) {
                    $emailo=$details['Email'];
                    $ido =$details['ID'];
                }
                

                
            }else{
                $message = "<hr>ACTION FAILED!";
            }*/
        }else{
            $message = " User name and email can not be empty";
            $status="warning";

        }
        return array($message,$status);
        
    }
    public function checkDetails($id ,$email)
    {
        if($id !=null and $email !=null){
            return true;
        }
        else return false;
    }
    public function getData($id,$changePswrdModel)
    {
          
        return $changePswrdModel->getData($id);
    }

}



?>

<?php /*
$details=$changePasswordModel->fetchAssoc($result);
                $emailo=$details['Email'];
                $ido =$details['ID'];

                if ($email==$emailo and $id==$id) {
                    $message="password reset
                   
                    <hr> <a href='home.php'>home</a>
                    include_once('inc/foot.php');";    
                    
                   // die;
                }
                else $message = "invalid user ID or Email address";
*/?>
