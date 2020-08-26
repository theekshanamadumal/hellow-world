<?php
class alert{
    private $message;   
    private $status;

    public function showAlert($message,$status)
    {
        switch ($status) {
            case 'success':
                $result="<br><div class='alert alert-success'>
                        <strong>Success! </strong>".$message."</div>";
                break;
            case 'info':
                 $result="<br><div class='alert alert-info'>
                          <strong>Information! </strong>".$message."</div>";
                 break;

            case 'warning':
                  $result="<br><div class='alert alert-warning'>
                            <strong>Warning! </strong>".$message."</div>";
                  break; 
            
            case 'error':
                  $result="<br><div class='alert alert-danger'>
                           <strong>Error! </strong>".$message."</div>";
                    break;   
            
            
            }
        return ($result);
    }

}

?>