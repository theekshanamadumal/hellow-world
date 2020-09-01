<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <?php include_once("inc/Header.php"); ?>
 <link rel="stylesheet" href="css/jobService.css">




 <?php      
            $jobType=$_GET['jobType'];
            $filename="services/".$jobType.".php";

            if(isset($_POST['Request'])){

            
            global $variable;
            $variable = $jobType;

            include_once("controller/request.ctrl.php");
            $reqctrll=new requestCtrl();
            list($massege,$status)=$reqctrll->requst($variable);
        
            require_once 'alert.view.php';
        
            $alertView=new alert();
        
            echo $alertView->showAlert($massege,$status);

            }
?>


 
 <div class="container-fluid">
    <div class="row">
    <div class="col-sm-8">
        <?php
                    include_once($filename);            
        ?>
    </div>
    <div class="col-sm-4">    
         <form method='post'>  
            <input type='submit' name='Request' class='button' value='Request' /><br><br>          
            <label for="myfile">Select files:</label>
            <input type="file" id="myfile" name="myfile" multiple><br><br>
            <input type='submit' name='ConfirmRequest' class='button' value='ConfirmRequest' />
            

         </form>
    </div>
    </div>
</div>

    
 <?php include_once('inc/Footer.php'); ?>
    
</body>
</html>