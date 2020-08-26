<?php
class alert{
    private $message;   
    private $status;
    

    public function showAlert($message,$status)
    {
        $result="";
        switch ($status) {
            case 'success':
                $result="<br><div class='alert alert-success alert-dismissible fade show'>
                        <strong>Success! </strong>".$message." <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                      </button></div>";
                break;
            case 'info':
                 $result="<br><div class='alert alert-info alert-dismissible fade show'>
                          <strong>Information! </strong>".$message."</div>";
                 break;

            case 'warning':
                  $result="<br><div class='alert alert-warning alert-dismissible fade show'>
                            <strong>Warning! </strong>".$message."</div>";
                  break; 
            
            case 'error':
                  $result="<br><div class='alert alert-danger alert-dismissible fade show'>
                           <strong>Error! </strong>".$message."</div>";
                    break;   
            
            
            }
        return ($result);
    }

}

?>