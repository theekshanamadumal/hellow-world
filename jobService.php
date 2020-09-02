
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
    if(isset($_POST["request"])){
      include_once("controller/request.ctrl.php");
      $reqctrll=new requestCtrl();
      list($massege,$status)=$reqctrll->checkAvaliability($jobType);
      echo $alertView->showAlert($massege,$status);
      if ($status=="success"){
echo '
    <script>
    document.querySelector(".popup").style.display="flex";   
    document.querySelector(".closebtn").addEventListener("click",function(){
    document.querySelector(".popup").style.display="none";
    </script>';

       }else{
        echo $alertView->showAlert($massege,$status);}
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
        <form action="" method="post">
        <input type="submit" class="btn btn-primary" name="request" value="Request" ></input>
        </form>
        </div>
            
        </div>
        <div class="col-sm-2"></div>
    
    </div>
    
</div>







 
 <?php include_once('inc/Footer.php'); ?>
 <?php// include_once('jobFileUpload.view.php'); ?>
    
</body>
</html>