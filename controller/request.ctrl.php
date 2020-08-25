<?php
include_once 'model/request.model.php';

class requestCtrl{
    
    public $massege;

    public function requst($var){

        if(isset($_POST['Request'])){
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
                    $put_result=$cn->putRequsts($var,$id,$newNo);

                    if ($put_result){
                        $massege="<div class='container'> <div class='alert alert-success alert-dismissible'>
                        <button type='button' class='close' data-dismiss='alert'>&times;</button>
                        <strong>Success!</strong> Request submitted successfully.
                        </div></div>";
                      }
                      else{
                        $massege="<div class='container'> <div class='alert alert-success alert-dismissible'>
                        <button type='button' class='close' data-dismiss='alert'>&times;</button>
                        <strong>Danger!</strong> Unable to submit request check whether you qualify as an candidate for the request.
                        </div></div>";
                      }


                }

                else{
                    $massege="<div class='container'> <div class='alert alert-success alert-dismissible'>
                      <button type='button' class='close' data-dismiss='alert'>&times;</button>
                      <strong>Danger!</strong> Unable to submit request check whether you qualify as an candidate for the request.
                      </div></div>";
                  }

            }

            else{
                $massege="<div class='container'> <div class='alert alert-success alert-dismissible'>
                  <button type='button' class='close' data-dismiss='alert'>&times;</button>
                  <strong>Warning!</strong> Must be logged in order to submit request.
                  </div></div>";
              }
        //$can_result=$cn->checkQulification($var);
        //$put_result=$cn->putRequsts($var,$id);

        }

        return $massege;

    }

}