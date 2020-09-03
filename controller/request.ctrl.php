<?php
include_once 'model/request.model.php';

class requestCtrl{
    
    public function checkAvaliability($var)
    {
        $massege="";
        $status="";

        
            
            if(isset($_SESSION['loginID'])){
                
                $id=$_SESSION['loginID'];
                $cn = new request();
                $occ_result=$cn->checkOccupation($id);

                if ($occ_result){
                    $details=$cn->fetchAssoc($occ_result);
                    $occ=$details['occupation'];
                    
                    $can_result=$cn->checkQulification($var);

                    if ($can_result){
                        $details2=$cn->fetchAssoc($can_result);
                        $can=$details2[$occ];
                                            

                    }

                }

                if ($can==1){

                    $result1=$cn->getLastvalue();
                    $details=$cn->fetchAssoc($result1);
                    $lastreqNo=$details['requestNo'];
                    $newNo=$lastreqNo+1;

                    $massege=$newNo;
                    $status="success";



                    


                }

                else{
                    $massege="Not qualified to apply this request";
                    $status="warning";
                  }

            }

            else{
                
                $massege="Must be logged in as a user inorder to submit request. <br> <a href='userLogin.php'>Login Here</a>";
                $status="warning";
              }
        

        

        return array($massege,$status);
    }
   

    public function updateRequestTable($var,$id,$newNo){
        $massege="";
        $status="";

        $cn = new request();
        $put_result=$cn->putRequsts($var,$id,$newNo);

                   
                    
        if ($put_result){
            $massege="Request submitted successfully.";
            $status="success";
          }
          else{
            $massege=" Request Error.";
            $status="error";
          }



        return array($massege,$status);

    }

}
?>
