<?php
class newAccCtrl{
    public function createAccount($ID,$pswrd1,$pswrd2,$first_name,$second_name,$address,$telephone,$email,$school,$occupation)
    {
        if($ID!=null){
                
            if ($pswrd1==$pswrd2 and $pswrd1!=null ) {
                
                include_once 'model/newAcc.model.php';
                $cn = new newAaccModel();
                $idResult=$cn->runIdQuery($ID);
                               
                if ($idResult){
                    $idDetails=$cn->numRows($idResult);
                    
                    if ($idDetails==null){

                       

                        $result= $cn->insertUserDetails($ID,$first_name,$second_name,$address,$telephone,$email,$school,$occupation);
                        $pass  = $cn->insertPasswordDetails($ID,$pswrd1);
            
                                                 
                        if ($pass && $result) {
                            
                            $massage="account created successfully<br><hr><a href='home.php'>Home Page</a>"; 
                        
                        }  
                                                       
                        else  $massage="account creation failed <br><hr>";  
                    
                    }
                    else $massage= "Already account exists!";
                
                }    
                else  $massage="account creation failed 2<br><hr>";  

            }
            elseif ($pswrd1==null){
                $massage="password can not be empty.<hr>";    
            }

            else $massage="passwords are not maching.<hr>";    
        }
        
        else $massage='National Identy value can not be empty<br>';                    
        
    
    return $massage;
    }




    public function checkDetails($ID,$pswrd1,$pswrd2)
    {
        $PswrdColumn='passwords';
    }   

}

?>  