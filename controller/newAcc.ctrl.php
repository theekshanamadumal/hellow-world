<?php
class newAccCtrl{
    public function checkDetails($ID,$pswrd1,$pswrd2)
    {
        if($ID!=null){
                
            if ($pswrd1==$pswrd2 and $pswrd1!=null ) {
                
                include_once 'model/newAcc.model.php';
                
                $id_result= mysqli_query($connection,$query_id);
                
                
                if ($id_result){
                    $id_details=mysqli_num_rows($id_result);
                    
                    if ($id_details==null){

                       

                        $result= mysqli_query($connection,$query_user);
                        $pass  = mysqli_query($connection,$query_password);   
            
                                                 
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
        
    }
    return $massage;

}

?>