<?php
include_once 'connection.model.php';

class accModel extends connection {
    
    private $table;
    private $username;
    
    public function fnc(){
        $query_id= "SELECT ID FROM userdetails WHERE ID='{$ID}'";  

        $query_user="INSERT INTO userdetails VALUES(
        '{$ID}',
        '{$first_name}',
        '{$second_name}',
        '{$address}',
        '{$telephone}',
        '{$email}',
        '{$school}',
        '{$occupation}')";
        
        $query_password="INSERT INTO passwords 
        VALUES('{$ID}','{$pp}')";
        
        $id_result= mysqli_query($connection,$query_id);
        $id_details=mysqli_num_rows($id_result);

        $result= mysqli_query($connection,$query_user);
        $pass  = mysqli_query($connection,$query_password);   
            
        
    }
}

?>