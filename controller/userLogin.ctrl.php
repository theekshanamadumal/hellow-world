<?php
include_once 'model/login.model.php';

class loginCtrl{
    private $username; 
    private $table;
    public $massege;
    public $status;

    public function log($table,$PswrdColumn,$username,$givenPassword,$destination,$loginType){
        $this->username=$username;
        $this->table=$table;
        if($this->username!=null and $givenPassword!=null){
            $cn = new login();
            $result=$cn->checkPassword($table,$username);
            if ($result) {
                $details=$cn->fetchAssoc($result);
                $password=$details[$PswrdColumn];
                $match=password_verify($givenPassword,$password);
                $user_id =$details['ID'];

                if ($match and $user_id==$username) {
                    session_destroy();
                    session_start();

                    if ($loginType=="user") {
                        $this->makeUserSession($destination,$user_id);
                    }else{
                        $this->makeAdminSession($destination,$user_id);
                    }                   
                    $massege= "<hr>LOGIN SUCCESSED!";
                    $status="success";
                }
                else{ $massege= "Invalid username or password";
                      $status="warning";
                }
                     
            }
            else{ $massege= "<hr>LOGIN FAILED!";    
                  $status="warning";}   
    
        }
        else { $massege=" Username or Password cannot be kept empty";
                $status="warning";}
        return array($massege,$status);
    }

    private function makeUserSession($destination,$user_id){
            $_SESSION['loginID'] = $user_id;
            $_SESSION['uI']=$destination;

            header("location:{$destination}");
            //die;
    }
    private function makeAdminSession($destination,$user_id){
        $_SESSION['adminID'] = $user_id;
        $_SESSION['uI']=$destination;

        header("location:{$destination}");
        //die;
}      
}             
?>