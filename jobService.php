
 <?php      
            $jobType=$_GET['jobType'];
            $jobName=$_GET['jobName'];
            $filename="services/".$jobType.".php";
            

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $jobName;?></title>
</head>
<body>
 <?php include_once("inc/Header.php"); 
 
 require_once 'alert.view.php';
 $alertView=new alert(); 
 ?>
 <link rel="stylesheet" href="css/jobService.css">

 <?php
    

 
   if(isset($_POST["upload"])){
    
      include_once("controller/request.ctrl.php");
      $reqctrll=new requestCtrl();
      list($message,$status)=$reqctrll->checkAvaliability($jobType);
      
      if ($status=="success"){ 
          //here $message = referenceNumber         
          $function='popupFunction();';
          $referenceNumber=$message;       

               

            list($message,$status)=$reqctrll->updateRequestTable($jobType,$_SESSION['loginID'],$referenceNumber);
            if ($status=="success"){ 
            $filePath='files/jobFiles/'.$referenceNumber;
       
            include_once"controller/fileupload.ctrl.php";
            $fileSaver = new userJobFileUploader();
            list($message,$status)=$fileSaver->saveFiles($_FILES['fileToUpload'],$filePath);
            echo $alertView->showAlert($message,$status);
            
            }else{
                echo $alertView->showAlert($message,$status);}

            
            


              

          }else{
            echo $alertView->showAlert($message,$status);}
         

    

       }
       

?>









<div class="container-fluid">
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
            <?php
                include_once($filename);            
            ?>
        <div class="container">
        
        <button class="btn btn-primary" onclick="popupFunction()">Request</button>
        
        </div>
            
        </div>
        <div class="col-sm-2"></div>
    
    </div>
    
</div>







 
 <?php include_once('inc/Footer.php'); ?>
 <?php include_once('jobFileUpload.view.php'); ?>
    
</body>
</html>