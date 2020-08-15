<?php
include_once 'model/login.model.php';

class loginCtrl{
    private $username; 
    private $table;
    public $massege;

    public function log($table,$PswrdColumn,$username,$givenPassword,$destination){
        $this->username=$username;
        $this->table=$table;
        if($this->username!=null and $givenPassword!=null){
            $cn = new login();
            $result=$cn->checkPassword($table,$username);
            if ($result) {
                $details=$cn->fetchAssoc($result);
                $password=$details[$PswrdColumn];
                $user_id =$details['ID'];

                if ($password==$givenPassword and $user_id==$username) {
                    $this->makeSession($destination,$user_id);
                    //$massege= "<hr>LOGIN SUCCESSED!";
                }
                else $massege= "invalid user name or password";
            }
            else $massege= "<hr>LOGIN FAILED!";       
    
        }
        else $massege=" user name and password cannot be empty";
        return $massege;
    }

    private function makeSession($destination,$user_id){
            $_SESSION['loginID'] = $user_id;
            $_SESSION['uI']=$destination;
            header("location:{$destination}");
            die;
    }   
}             
?>