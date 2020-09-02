
 <?php      
            $jobType=$_GET['jobType'];
            $filename="services/".$jobType.".php";
            

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $jobType;?></title>
</head>
<body>
 <?php include_once("inc/Header.php"); ?>
 <link rel="stylesheet" href="css/jobService.css">

<?php
 if(isset($_POST['Confirm'])){

            
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
    <div class="col-sm-2"></div>
    <div class="col-sm-8">
        <?php
            include_once($filename);            
        ?>
        <button class="btn btn-primary" onclick="popupFunction(<?php echo $jobType?>)">Request</button>  
    </div>
    <div class="col-sm-2">    
         
    </div>
    </div>
    
</div>

 <?php include_once('inc/jobFileUpload.view.php'); ?>
 <?php include_once('inc/Footer.php'); ?>

    
</body>
</html>